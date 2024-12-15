import {createRouter,createWebHistory} from "vue-router"
import ContactList from "../components/ContactList.vue"
import AddContact from "../components/AddContact.vue"
const routes = [
    {path:'/',name:'contactlist',component:ContactList},
    {path:'/addcontact',name:'addcontact',component:AddContact}

];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;