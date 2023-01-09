<script setup>
import {mdiUpload} from '@mdi/js'
import {computed, ref, watch} from 'vue'
import BaseButton from '@/Components/BaseButton.vue'

const props = defineProps({
  modelValue: {
    type: [Object, File, Array],
    default: null
  },
  label: {
    type: String,
    default: 'Upload'
  },
  icon: {
    type: String,
    default: mdiUpload
  },
  accept: {
    type: String,
    default: null
  },
  color: {
    type: String,
    default: 'info'
  },
  src: {
    type: String,
    default: null
  }
})

const emit = defineEmits(['update:modelValue'])

const root = ref(null)

const file = ref(props.modelValue)

const img = ref(props.src)

const modelValueProp = computed(() => props.modelValue)

watch(modelValueProp, value => {
  console.log(value)

  file.value = value

  if (!value) {
    root.value.input.value = null
  }
})

const upload = event => {
  const value = event.target.files || event.dataTransfer.files

  if (value[0]) {
    file.value = value[0]

    img.value = URL.createObjectURL(value[0])

    emit('update:modelValue', file.value)
  }
  else {

  }


  // Use this as an example for handling file uploads
  // let formData = new FormData()
  // formData.append('file', file.value)

  // const mediaStoreRoute = `/your-route/`

  // axios
  //   .post(mediaStoreRoute, formData, {
  //     headers: {
  //       'Content-Type': 'multipart/form-data'
  //     },
  //     onUploadProgress: progressEvent
  //   })
  //   .then(r => {
  //
  //   })
  //   .catch(err => {
  //
  //   })
}

// const uploadPercent = ref(0)
//
// const progressEvent = progressEvent => {
//   uploadPercent.value = Math.round(
//     (progressEvent.loaded * 100) / progressEvent.total
//   )
// }
</script>

<template>
  <div class="flex items-stretch justify-start relative">
    <label class="inline-flex">
      <BaseButton
          as="a"
          :label="label"
          :icon="icon"
          :color="color"
          :class="{ 'rounded-r-none': file }"
      />
      <input
          ref="root"
          type="file"
          class="absolute top-0 left-0 w-full h-full opacity-0 outline-none cursor-pointer -z-1"
          :accept="accept"
          @input="upload"
      >
    </label>
    <div v-if="file">
      <span
          class="inline-flex px-4 py-2 justify-center bg-gray-100 dark:bg-slate-800 border-gray-200 dark:border-slate-700 border rounded-r"
      >
        {{ file.name }}
      </span>
    </div>
  </div>
  <div
      v-if="img"
      class="flex w-1/2 mx-auto items-center mt-10 p-2 dark:bg-slate-800 border-gray-200 dark:border-slate-700 border rounded">
    <img :src="img" class="h-48 object-cover mx-auto" alt="Intro image">
  </div>
</template>
