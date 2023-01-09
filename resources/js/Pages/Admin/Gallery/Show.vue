<script setup>
import {Head, Link, useForm} from "@inertiajs/inertia-vue3"
import {
  mdiAccountKey,
  mdiArrowLeftBoldOutline,
} from "@mdi/js"
import LayoutAuthenticated from "@/Layouts/LayoutAuthenticated.vue"
import SectionMain from "@/Components/SectionMain.vue"
import SectionTitleLineWithButton from "@/Components/SectionTitleLineWithButton.vue"
import CardBox from "@/Components/CardBox.vue"
import BaseButton from "@/Components/BaseButton.vue"

const props = defineProps({
  intro: {
    type: Object,
    default: () => ({}),
  },
})
</script>

<template>
  <LayoutAuthenticated>
    <Head title="View Intro"/>
    <SectionMain>
      <SectionTitleLineWithButton
          :icon="mdiAccountKey"
          title="View Intro"
          main
      >
        <BaseButton
            :route-name="route('intro.index')"
            :icon="mdiArrowLeftBoldOutline"
            label="Back"
            color="white"
            rounded-full
            small
        />
      </SectionTitleLineWithButton>
      <CardBox class="mb-6">
        <table>
          <tbody>
          <tr>
            <td
                class="
                  p-4
                  pl-8
                  text-slate-500
                  dark:text-slate-400
                  hidden
                  lg:block
                "
            >
              Image
            </td>
            <td data-label="Name">
              <img :src="intro.url" class="w-1/6" alt="Intro Image"/>
            </td>
          </tr>
          <tr>
            <td
                class="
                  p-4
                  pl-8
                  text-slate-500
                  dark:text-slate-400
                  hidden
                  lg:block
                "
            >
              Title En
            </td>
            <td data-label="Name">
              {{ intro.title.en }}
            </td>
          </tr>
          <tr>
            <td
                class="
                  p-4
                  pl-8
                  text-slate-500
                  dark:text-slate-400
                  hidden
                  lg:block
                "
            >
              Title Ru
            </td>
            <td data-label="Name">
              {{ intro.title.ru }}
            </td>
          </tr>
          <tr>
            <td
                class="
                  p-4
                  pl-8
                  text-slate-500
                  dark:text-slate-400
                  hidden
                  lg:block
                "
            >
              Description En
            </td>
            <td data-label="Name">
              {{ intro.description.en }}
            </td>
          </tr>
          <tr>
            <td
                class="
                  p-4
                  pl-8
                  text-slate-500
                  dark:text-slate-400
                  hidden
                  lg:block
                "
            >
              Description Ru
            </td>
            <td data-label="Name">
              {{ intro.description.ru }}
            </td>
          </tr>
          <tr>
            <td
                class="
                  p-4
                  pl-8
                  text-slate-500
                  dark:text-slate-400
                  hidden
                  lg:block
                "
            >
              Created
            </td>
            <td data-label="Created">
              {{ intro.created_at }}
            </td>
          </tr>
          </tbody>
        </table>
      </CardBox>
    </SectionMain>
  </LayoutAuthenticated>
</template>
