<script setup>
import {Head, useForm} from "@inertiajs/inertia-vue3"
import {mdiAccountKey, mdiAlertBoxOutline, mdiPlus,} from "@mdi/js"
import LayoutAuthenticated from "@/Layouts/LayoutAuthenticated.vue"
import SectionMain from "@/Components/SectionMain.vue"
import SectionTitleLineWithButton from "@/Components/SectionTitleLineWithButton.vue"
import BaseButton from "@/Components/BaseButton.vue"
import CardBox from "@/Components/CardBox.vue"
import NotificationBar from "@/Components/NotificationBar.vue"
import Pagination from "@/Components/Admin/Pagination.vue"
import Sort from "@/Components/Admin/Sort.vue"
import Label from "@/Components/Label.vue";
import Draggable from "vuedraggable";

const props = defineProps({
  intros: {
    type: Object,
    default: () => ({}),
  },
  filters: {
    type: Object,
    default: () => ({}),
  },
  can: {
    type: Object,
    default: () => ({}),
  },
})

const form = useForm({
  search: props.filters.search,
})

const formDelete = useForm({})

function showLog(event) {
  console.log(event)
}

function destroy(id) {
  if (confirm("Are you sure you want to delete?")) {
    formDelete.delete(route("intro.destroy", id))
  }
}
</script>

<template>
  <LayoutAuthenticated>
    <Head title="Intros"/>
    <SectionMain>
      <SectionTitleLineWithButton
          :icon="mdiAccountKey"
          title="Intros"
          main
      >
        <BaseButton
            v-if="can.delete"
            :route-name="route('intro.create')"
            :icon="mdiPlus"
            label="Add"
            color="info"
            rounded-full
            small
        />
      </SectionTitleLineWithButton>
      <NotificationBar
          v-if="$page.props.flash.message"
          color="success"
          :icon="mdiAlertBoxOutline"
      >
        {{ $page.props.flash.message }}
      </NotificationBar>
      <CardBox class="mb-6" has-table>
        <form @submit.prevent="form.get(route('intro.index'))">
          <div class="py-2 flex">
            <div class="flex pl-4">
              <input
                  type="search"
                  v-model="form.search"
                  class="
                  rounded-md
                  shadow-sm
                  border-gray-300
                  focus:border-indigo-300
                  focus:ring
                  focus:ring-indigo-200
                  focus:ring-opacity-50
                "
                  placeholder="Search"
              />
              <BaseButton
                  label="Search"
                  type="submit"
                  color="info"
                  class="ml-4 inline-flex items-center px-4 py-2"
              />
            </div>
          </div>
        </form>
      </CardBox>
      <CardBox class="mb-6" has-table>
        <table>
          <thead>
          <tr>
            <th>
              <Sort label="ID" attribute="id"/>
            </th>
            <th>
              <Label value="Image"/>
            </th>
            <th>
              <Label value="Title"/>
            </th>
            <th>
              <Label value="Description"/>
            </th>
            <th v-if="can.edit || can.delete">Actions</th>
          </tr>
          </thead>

          <Draggable
              :list="intros.data"
              item-key="id"
              tag="tbody"
              @change="showLog"
          >
            <template #item="{element, index, item}">
              <div>
                <pre>
                  IDX : {{ index }}
                  KEY: {{ item }}
                </pre>
              </div>
            </template>
          </Draggable>
        </table>
        <div class="py-4">
          <Pagination :data="intros"/>
        </div>
      </CardBox>
    </SectionMain>
  </LayoutAuthenticated>
</template>
