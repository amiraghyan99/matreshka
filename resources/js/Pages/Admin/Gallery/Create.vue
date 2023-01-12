<script setup>
import {Head, useForm} from "@inertiajs/inertia-vue3"
import {mdiArrowLeftBoldOutline, mdiImageEdit} from "@mdi/js"
import LayoutAuthenticated from "@/Layouts/LayoutAuthenticated.vue"
import SectionMain from "@/Components/SectionMain.vue"
import SectionTitleLineWithButton from "@/Components/SectionTitleLineWithButton.vue"
import CardBox from "@/Components/CardBox.vue"
import FormField from '@/Components/FormField.vue'
import BaseButton from '@/Components/BaseButton.vue'
import BaseButtons from '@/Components/BaseButtons.vue'
import FormFilePicker from "@/Components/FormFilePicker.vue";

const form = useForm({
  images: null
})

function submit(e) {
  console.log(e)
  // form.post(route('gallery.store'))
}
</script>

<template>
  <LayoutAuthenticated>
    <Head title="Create Gallery"/>
    <SectionMain>
      <SectionTitleLineWithButton
          :icon="mdiImageEdit"
          title="Add Gallery"
          main
      >
        <BaseButton
            :route-name="route('gallery.index')"
            :icon="mdiArrowLeftBoldOutline"
            label="Back"
            color="white"
            rounded-full
            small
        />
      </SectionTitleLineWithButton>

      <CardBox
          form
          @submit.prevent="submit"
      >
        <FormField
            label="Image"
            :class="{ 'text-red-400': form.errors['images'] }"
        >

          <FormFilePicker
              v-model="form.images"
              label="Drag & Drop"
              multiple
          >
          </FormFilePicker>

          <!--          <DropZone-->
          <!--              @filesDropped="submit"-->
          <!--          >-->
          <!--            <div class="w-96 h-64 border border-blue-500"></div>-->
          <!--          </DropZone>-->

        </FormField>
        <div class="text-red-400 text-sm my-4" v-if="form.errors['images']">
          {{ form.errors['images'] }}
        </div>

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
