<template>
   <div class="container">
    <div class="row">
         <!-- Success or Error Message -->
        <div v-if="message" :class="`alert ${messageType}`" role="alert">
          {{ message }}
        </div>
        <div class="col-md-6">
            <form @submit.prevent='saveContact' novalidate>
                <fieldset>
                    <div class="form-group">
                        <label class="form-label mt-4">Name</label>
                        <input type="text" class="form-control" v-model="formData.name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-4">Email</label>
                        <input type="email" class="form-control" v-model="formData.email" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-4">Designation</label>
                        <input type="text" class="form-control" v-model="formData.designation" placeholder="Enter Designation">
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-4">Phone Number</label>
                        <input type="text" class="form-control" v-model="formData.contact_no" placeholder="Enter Phone Number">
                    </div>

                    <button class="btn btn-primary mt-4">Submit</button>
                    
                </fieldset>
            </form>
        </div>
    </div>

   </div>
</template>
<script setup>
import { reactive,ref } from 'vue';
import axios from 'axios';

const formData = reactive({
  name: '',
  email: '',
  designation: '',
  contact_no: '',
});

const message = ref(''); 
const messageType = ref('');

const saveContact = async () => {
  try {
    const response = await axios.post('http://127.0.0.1:8000/api/save_contact', formData);
    // Display the success message
    message.value = response.data.message; // e.g., "Contact Created Successfully"
    messageType.value = 'alert-success'; // Bootstrap success alert
    // Optionally, clear the form fields
    Object.keys(formData).forEach(key => (formData[key] = ''));
  } catch (error) {
    // Display the error message
    message.value =
      error.response?.data?.message || 'Failed to save contact. Please try again.';
    messageType.value = 'alert-danger'; // Bootstrap danger alert
  }
};
</script>

<style>
.alert {
  margin-bottom: 20px;
  padding: 15px;
  border-radius: 4px;
}
</style>