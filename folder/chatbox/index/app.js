

// For Chat 
const getchatmoredotbtn = document.getElementById('chat_moredot');
getchatmoredotbtn.addEventListener('click', function () {
   const getchatmodal = document.getElementById('chat_modal');
   getchatmodal.classList.toggle('hidden');
});


// Sending file 
function fileview(event) {
   // console.log(event);
   const getinput = event.target;
   const getpreview = document.getElementById('preview');
   const filepreview = document.querySelector('.filepreview');
   if (getpreview.src = URL.createObjectURL(getinput.files[0])) {
      filepreview.classList.remove('hidden');
      console.log(filepreview)
   }
}


const chatusers = document.querySelectorAll('.chatusers');
for (let x = 0; x < chatusers.length; x++) {
   chatusers[x].addEventListener('contextmenu', function () {
      console.log('hi')
   })
}