<script setup>
import {Head, Link, useForm} from "@inertiajs/inertia-vue3"
import {
  mdiAccountKey,
  mdiPlus,
  mdiSquareEditOutline,
  mdiTrashCan,
  mdiAlertBoxOutline,
} from "@mdi/js"
import LayoutAuthenticated from "@/Layouts/LayoutAuthenticated.vue"
import SectionMain from "@/Components/SectionMain.vue"
import SectionTitleLineWithButton from "@/Components/SectionTitleLineWithButton.vue"
import BaseButton from "@/Components/BaseButton.vue"
import CardBox from "@/Components/CardBox.vue"
import BaseButtons from "@/Components/BaseButtons.vue"
import NotificationBar from "@/Components/NotificationBar.vue"
import Pagination from "@/Components/Admin/Pagination.vue"
import Sort from "@/Components/Admin/Sort.vue"
import Label from "@/Components/Label.vue";
import {Sortable} from "sortablejs-vue3";

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
function showLog(event){
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

          <Sortable
              :list="intros.data"
              item-key="id"
              itemid=""
              tag="tbody"
              @change="showLog"
          >
            <template #item="{element, index, key}">
              <tr class="draggable" :key="key">
                <td data-label="Id">
                  <Link
                      :href="route('intro.show', key)"
                      class="
                    no-underline
                    hover:underline
                    text-cyan-600
                    dark:text-cyan-400
                  "
                  >
                    {{key }}
                  </Link>
                </td>
                <td data-label="Image">
                  <img
                      v-if="element.url"
                      :src="element.url" :alt="element.title.en"
                      class="w-48"
                  />
                  <Label v-else value="No Image"/>
                </td>
                <td data-label="Title">
                  <Link
                      :href="route('intro.show',key)"
                      class="
                    no-underline
                    hover:underline
                    text-cyan-600
                    dark:text-cyan-400
                  "
                  >
                    EN: {{element.title.en }}
                    <hr>
                    RU: {{element.title.ru }}
                  </Link>
                </td>
                <td data-label="Description">
                  <Link
                      :href="route('intro.show',key)"
                      class="
                    no-underline
                    hover:underline
                    text-cyan-600
                    dark:text-cyan-400
                  "
                  >
                    EN: {{element.description.en }}
                    <hr>
                    RU: {{element.description.ru }}
                  </Link>
                </td>
                <td
                    v-if="can.edit || can.delete"
                    class="before:hidden lg:w-1 whitespace-nowrap"
                >
                  <BaseButtons type="justify-start lg:justify-end" no-wrap>
                    <BaseButton
                        v-if="can.edit"
                        :route-name="route('intro.edit',key)"
                        color="info"
                        :icon="mdiSquareEditOutline"
                        small
                    />
                    <BaseButton
                        v-if="can.delete"
                        color="danger"
                        :icon="mdiTrashCan"
                        small
                        @click="destroy(key)"
                    />
                  </BaseButtons>
                </td>
              </tr>

            </template>
          </Sortable>
        </table>
        <div class="py-4">
          <Pagination :data="intros"/>
        </div>
      </CardBox>
    </SectionMain>
  </LayoutAuthenticated>
</template>
