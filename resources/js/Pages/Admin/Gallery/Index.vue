<script setup>
import {Head, useForm} from "@inertiajs/inertia-vue3"
import {mdiAlertBoxOutline, mdiDotsGrid, mdiEye, mdiImageSizeSelectActual, mdiPlus, mdiTrashCan} from "@mdi/js"
import LayoutAuthenticated from "@/Layouts/LayoutAuthenticated.vue"
import SectionMain from "@/Components/SectionMain.vue"
import SectionTitleLineWithButton from "@/Components/SectionTitleLineWithButton.vue"
import BaseButton from "@/Components/BaseButton.vue"
import NotificationBar from "@/Components/NotificationBar.vue"
import {ref, watch} from "vue";
import BaseButtons from "@/Components/BaseButtons.vue";
import CardBoxModal from "@/Components/CardBoxModal.vue";
import Draggable from 'vuedraggable'
import BaseIcon from "@/Components/BaseIcon.vue";
import {useDraggable} from "@/Composables/useDraggable";

const props = defineProps({
  can: {
    type: Object,
    default: () => ({}),
  },
  galleries: {
    type: Object,
    default: () => ({}),
  }
})

const galleries = ref(props.galleries)
const isModalDangerActive = ref(false)
const destroyId = ref(null)
const formDelete = useForm({})

const {move} = useDraggable(galleries, {route: 'gallery.move'})

watch(() => props.galleries, (newData) => galleries.value = newData)

function destroy(id) {
  formDelete.delete(route('gallery.destroy', id), {preserveScroll: true})
}

function openModal(id) {
  isModalDangerActive.value = true
  destroyId.value = id
}

function edit(id) {
  console.log(id)
}


</script>

<template>

  <LayoutAuthenticated>
    <Head title="Gallery"/>
    <SectionMain>
      <SectionTitleLineWithButton
          :icon="mdiImageSizeSelectActual"
          :title="`Gallery ( ${galleries.length} )`"
          main
      >
        <BaseButton
            v-if="can.delete"
            :route-name="route('gallery.create')"
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

      <Draggable
          v-if="galleries.length !== 0"
          v-model="galleries"
          group="galleries"
          item-key="id"
          tag="ul"
          ghost-class="ghost"
          drag-class="drag"
          handle=".handle"
          @change="move"
          class="grid grid-cols-1 gap-8 md:grid-cols-3 md:gap-3 lg:grid-cols-4 lg:gap-4"
      >
        <template #item="{element, key = element.id, index}">
          <li>
            <div class="shadow-lg rounded mx-auto w-64">
              <div class="h-8 cursor-grab handle mb-2 md:text-center text-right my-1 py-1">
                <BaseIcon
                    size="22"
                    :path="mdiDotsGrid"/>
              </div>

              <div v-html="element.img_tag" class="w-48 h-64 mx-auto"/>

              <div class="">
                <BaseButtons
                    type="w-full justify-center mt-2 mb-0">
                  <BaseButton
                      color="warning"
                      label="Change"
                      :icon="mdiEye"
                      small
                      @click="edit(key)"
                  />

                  <BaseButton
                      color="danger"
                      label="Delete"
                      :icon="mdiTrashCan"
                      small
                      @click="openModal(key)"
                  />

                </BaseButtons>
              </div>


            </div>

          </li>


        </template>
      </Draggable>
      <div v-else>No Data.</div>

      <CardBoxModal
          v-model="isModalDangerActive"
          title="Please confirm"
          buttonLabel="Delete"
          button="danger"
          has-cancel
          @confirm="destroy(destroyId)"
      >
      </CardBoxModal>

    </SectionMain>
  </LayoutAuthenticated>
</template>

<style scoped>
.drag > div {
  @apply rounded-md shadow-lg
}

.ghost {
  @apply bg-gray-300 rounded-md
}

.ghost > div {
  @apply invisible
}


</style>