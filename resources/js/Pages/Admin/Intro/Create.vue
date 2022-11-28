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
    en: '',
    ru: '',
  },
  description: {
    en: '',
    ru: '',
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
            label="Title EN"
            :class="{ 'text-red-400': form.errors['title.en'] }"
        >
          <FormControl
              v-model="form.title.en"
              type="text"
              placeholder="Enter English Title"
              :error="form.errors['title.en']"
          >
            <div class="text-red-400 text-sm" v-if="form.errors['title.en']">
              {{ form.errors['title.en'] }}
            </div>
          </FormControl>
        </FormField>

        <FormField
            label="Description EN"
            :class="{ 'text-red-400': form.errors['description.en'] }"
        >
          <FormControl
              v-model="form.description.en"
              type="textarea"
              placeholder="Enter English Description"
              :error="form.errors['description.en']"
          >
            <div class="text-red-400 text-sm" v-if="form.errors['description.en']">
              {{ form.errors['description.en'] }}
            </div>
          </FormControl>
        </FormField>

        <FormField
            label="Title RU"
            :class="{ 'text-red-400': form.errors['title.ru'] }"
        >
          <FormControl
              v-model="form.title.ru"
              type="text"
              placeholder="Enter Russian Title"
              :error="form.errors['title.ru']"
          >
            <div class="text-red-400 text-sm" v-if="form.errors['title.ru']">
              {{ form.errors['title.ru'] }}
            </div>
          </FormControl>
        </FormField>

        <FormField
            label="Description RU"
            :class="{ 'text-red-400': form.errors['description.ru'] }"
        >
          <FormControl
              v-model="form.description.ru"
              type="textarea"
              placeholder="Enter Russian Description"
              :error="form.errors['description.ru']"
          >
            <div class="text-red-400 text-sm" v-if="form.errors['description.ru']">
              {{ form.errors['description.ru'] }}
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
