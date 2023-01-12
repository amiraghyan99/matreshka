import {Inertia} from "@inertiajs/inertia";

export function useDraggable(data, {route: routeName}) {
    function move(e) {
        let action = e.moved || e.added

        let index = action.newIndex
        let items = data.value || data

        let prevItem = items[index - 1]
        let nextItem = items[index + 1]

        let item = items[index]

        let position = item.position

        if (prevItem && nextItem) position = (prevItem.position + nextItem.position) / 2
        else if (prevItem) position = prevItem.position + (prevItem.position / 2)
        else if (nextItem) position = nextItem.position / 2

        Inertia.put(route(routeName, item.id), {
            position: position
        }, {preserveScroll: true})
    }

    return {move}
}