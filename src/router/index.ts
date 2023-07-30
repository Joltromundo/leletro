import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import ApplianceIndex from '../views/appliance/Index.vue'
import ApplianceCreate from '../views/appliance/Create.vue'
import ApplianceUpdate from '../views/appliance/Update.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/appliance',
      name: 'applianceIndex',
      component: ApplianceIndex
    },
    {
      path: '/appliance/create',
      name: 'applianceCreate',
      component: ApplianceCreate
    },
    {
      path: '/appliance/:id/update',
      name: 'applianceUpdate',
      component: ApplianceUpdate
    }
  ]
})

export default router
