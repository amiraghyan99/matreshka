<script setup>
import {mdiUpload} from '@mdi/js'
import {computed, ref, watch} from 'vue'
import BaseButton from '@/Components/BaseButton.vue'
import DropZone from "@/Components/DropZone.vue";

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
  multiple: {
    type: Boolean,
    default: false
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

const files = ref(props.modelValue)

const img = ref(props.src)

const modelValueProp = computed(() => props.modelValue)

watch(modelValueProp, value => {
  files.value = value

  if (!value) {
    root.value.input.value = null
  }
})

const upload = e => {
  const value = [...e.target.files]

  console.log(value)
  if (value[0]) {
    //   img.value = URL.createObjectURL(value[0])
    //
    emit('update:modelValue', files.value)
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
const dropped = event => {
  console.log(event)
  // upload()
}


const remove = idx => files.splice(idx, 1)

</script>

<template>
  <DropZone
      @filesDropped="dropped"
      :multiple="multiple"
      :accept="accept"
      :button-color="color"
      label="Upload Galleries"
  />
</template>
