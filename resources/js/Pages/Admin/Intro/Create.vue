<script setup>
import {Head, Link, useForm} from "@inertiajs/inertia-vue3"
import {
  mdiImageEdit,
  mdiArrowLeftBoldOutline
} from "@mdi/js"
import LayoutAuthenticated from "@/Layouts/LayoutAuthenticated.vue"
import SectionMain from "@/Components/SectionMain.vue"
import SectionTitleLineWithButton from "@/Components/SectionTitleLineWithButton.vue"
import CardBox from "@/Components/CardBox.vue"
import FormField from '@/Components/FormField.vue'
import FormControl from '@/Components/FormControl.vue'
import BaseButton from '@/Components/BaseButton.vue'
import BaseButtons from '@/Components/BaseButtons.vue'

const form = useForm({
  title: {
    0: {
      en: '',
      ru: '',
    }

  },
  description: {
    0: {
      en: '',
      ru: '',
    }
  },
  qty: [],
  image: null
})
</script>

<template>
  <LayoutAuthenticated>
    <Head title="Create Intro"/>
    <SectionMain>
      <SectionTitleLineWithButton
          :icon="mdiImageEdit"
          title="Add Intro"
          main
      >
        <BaseButton
            :route-name="route('permission.index')"
            :icon="mdiArrowLeftBoldOutline"
            label="Back"
            color="white"
            rounded-full
            small
        />
      </SectionTitleLineWithButton>
      <CardBox
          form
          @submit.prevent="form.post(route('intro.store'))"
      >
        <pre>
          {{ form.errors }}
        </pre>
        <FormField
            label="Title En"
            :class="{ 'text-red-400': form.errors.title }"
        >
          <FormControl
              v-model="form.title.en"
              type="text"
              placeholder="Enter English Title"
              :error="form.errors.title"
          >
            <div class="text-red-400 text-sm" v-if="form.errors.title">
              {{ form.errors.title }}
            </div>
          </FormControl>
        </FormField>
        <template #footer>
          <BaseButtons>
            <BaseButton
                type="submit"
                color="info"
                label="Submit"
                :class="{ 'opacity-25': form.processing }"
                :disabled="form.processing"
            />
          </BaseButtons>
        </template>
      </CardBox>
    </SectionMain>
  </LayoutAuthenticated>
</template>
