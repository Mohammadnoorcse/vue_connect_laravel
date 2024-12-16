<template>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody v-for="contact in contacts" :key="contact.id">
                <tr class="table-secondary">
                    <th scope="row">{{contact.id}}</th>
                    <th scope="row">{{contact.name}}</th>
                    <th scope="row">{{contact.email}}</th>
                    <th scope="row">{{contact.designation}}</th>
                    <th scope="row">{{contact.contact_no}}</th>
                    <th scope="row"><button class="btn btn-danger btn-sm" @click.prevent= "deleteContact(contact.id)">Delete</button></th>
                </tr>
            </tbody>
        </table>

    </div>
</template>
<script setup>
import { ref, onMounted } from 'vue'; // Import reactive and lifecycle methods
import axios from 'axios';

const contacts = ref([]); // Define a reactive variable to store data
const error = ref(null); // Reactive variable to handle errors
const loading = ref(true); // Reactive variable to show loading state

// Function to fetch data from the API
const fetchContacts = async () => {
  let url = 'http://127.0.0.1:8000/api/contacts';
  try {
    const response = await axios.get(url);
     contacts.value = response.data.contacts; // Assign data to reactive variable
    // console.log(response.data.contacts)
  } catch (err) {
    error.value = err.message || 'Error fetching data';
    console.error(err);
  } finally {
    loading.value = false; // End loading state
  }
};

// Delete contact method
const deleteContact = async (id) => {
  const confirmDelete = confirm('Are you sure you want to delete this contact?');
  if (!confirmDelete) return;

  try {
    await axios.delete(`http://127.0.0.1:8000/api/delete_contact/${id}`);
    // Remove contact from local list
    // contacts.value = contacts.value.filter((contact) => contact.id !== id);
    alert('Contact deleted successfully!');
  } catch (error) {
    console.error('Failed to delete contact:', error.response || error.message);
    alert('Failed to delete contact. Please try again.');
  }
};

// Lifecycle hook to call the API when the component is mounted
onMounted(fetchContacts);
console.log(contacts)

</script>