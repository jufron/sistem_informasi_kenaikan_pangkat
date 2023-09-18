

const password = document.getElementById('password');
const password_baru = document.getElementById('password-baru');
const password_confirmation = document.getElementById('password-confirmation');

const tampil_password_checkbox = document.getElementById('tampil-password');

tampil_password_checkbox.addEventListener('change', () => {
   if (tampil_password_checkbox.checked) {
      password.type = 'text';
      password_baru.type = 'text';
      password_confirmation.type = 'text';
   } else {
      password.type = 'password';
      password_baru.type = 'password';
      password_confirmation.type = 'password';
   }
});


const imageInput = document.getElementById('input-image');
const previewImage = document.getElementById('preview');

imageInput.addEventListener('change', () => {
   const selectedFile = imageInput.files[0];

   if (selectedFile) {
      previewImage.style.display = 'block';

      const reader = new FileReader();

      reader.onload = function () {
         previewImage.src = reader.result;
      };

      reader.readAsDataURL(selectedFile);
   }
});



