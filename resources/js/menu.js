import {
  mdiAccountCircle,
  mdiMonitor,
  mdiAccountKey,
  mdiAccountEye,
  mdiAccountGroup,
  mdiImageEdit
} from '@mdi/js'

export default [
  {
    route: 'dashboard',
    icon: mdiMonitor,
    label: 'Dashboard',
    can: 'dashboard'
  },
  {
    route: 'permission.index',
    icon: mdiAccountKey,
    label: 'Permissions',
    can: 'permission'
  },
  {
    route: 'role.index',
    icon: mdiAccountEye,
    label: 'Roles',
    can: 'role'

  },
  {
    route: 'user.index',
    icon: mdiAccountGroup,
    label: 'Users',
    can: 'user'
  },
  {
    route: 'intro.index',
    icon: mdiImageEdit,
    label: 'Intro',
    can: 'intro'
  },
]
