<script setup>
// make sure to import `ref` from Vue
import {computed, ref} from 'vue'
import {getButtonColor} from "@/colors";
import BaseButton from "@/Components/BaseButton.vue";

const props = defineProps({
  label: {
    type: [String, Number],
    default: null
  },
  icon: {
    type: String,
    default: null
  },
  multiple: {
    type: Boolean,
    default: false
  },
  color: {
    type: String,
    default: 'white'
  },
  buttonColor: {
    type: String,
    default: 'info'
  },
  small: Boolean,
  outline: Boolean,
  active: Boolean,
  disabled: Boolean,
  roundedFull: Boolean,

})

const emit = defineEmits(['files-dropped'])

// Create `active` state and manage it with functions
const selected = ref(false)
const multiple = ref(props.multiple)
const accept = ref(props.accept)

function setSelected(bool) {
  selected.value = bool
}

function getSelected() {
  return selected.value
}

function onDropOrUpload(e) {
  console.log(e)

  // const files = multiple.value ? [...e.dataTransfer.files] : [e.dataTransfer.files[0]]

  // setSelected(false) // add this line too

  // emit('files-dropped', files)
}

const uploadPercent = ref(0)

const progressEvent = progressEvent => {
  uploadPercent.value = Math.round(
      (progressEvent.loaded * 100) / progressEvent.total
  )
}


const componentClass = computed(() => {
  const base = [
    'border-2',
    'border-dashed',
    'w-4/6',
    'md:h-64 h-24',
    'mx-auto',
    'whitespace-nowrap',
    'focus:outline-none',
    'transition-colors',
    'focus:ring',
    'duration-150',
    'border',
    props.roundedFull ? 'rounded-full' : 'rounded',
    props.active ? 'ring ring-black dark:ring-white' : 'ring-blue-700',
    getSelected ? 'border-green-600' : 'border-gray-600',
    getButtonColor(props.buttonColor, props.outline, !props.disabled)
  ]

  if (props.small) {
    base.push(
        'text-sm',
        props.roundedFull ? 'px-3 py-1' : 'p-1'
    )
  } else {
    base.push(
        'py-2',
        props.roundedFull ? 'px-6' : 'px-3'
    )
  }


  if (props.disabled) {
    base.push('cursor-not-allowed', props.outline ? 'opacity-50' : 'opacity-70')
  }

  return base
})

</script>

<template>
  <!-- add `data-active` and the event listeners -->
  <div :data-selected="selected" @dragenter.prevent="setSelected(true)" @dragover.prevent="setSelected(true)"
       @dragleave.prevent="setSelected(false)" @drop.prevent="onDropOrUpload"
       :class="componentClass"
  >
    <!-- share state with the scoped slot -->
    <slot :dropZoneSelected="selected"></slot>
    <div class="flex items-stretch justify-start relative">
      <label class="flex">
        <BaseButton
            as="a"
            :label="label"
            :icon="icon"
            :color="buttonColor"
            outline
            @click="$refs.root.click()"
        />
        <input
            ref="root"
            type="file"
            class="hidden"
            :accept="accept"
            :multiple="multiple"
            @input="onDropOrUpload"
        >
      </label>
    </div>

  </div>
</template>
