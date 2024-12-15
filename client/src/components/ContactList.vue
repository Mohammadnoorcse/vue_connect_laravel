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
                </tr>
            </thead>

            <tbody>
                <tr class="table-secondary">
                    <th scope="row">1</th>
                    <th scope="row">2</th>
                    <th scope="row">3</th>
                    <th scope="row">4</th>
                    <th scope="row">5</th>
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
  } catch (err) {
    error.value = err.message || 'Error fetching data';
    console.error(err);
  } finally {
    loading.value = false; // End loading state
  }
};

// Lifecycle hook to call the API when the component is mounted
onMounted(fetchContacts);
console.log(contacts)

</script>