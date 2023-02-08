// $(document).ready(function() {
//     $(".delete-btn btn btn-sm btn-outline-secondary").click(function() {
//       var id = $(this).val();
//       $("#id-input").val(id);
//     });
//   });

const deleteBtns = document.querySelectorAll('.delete-btn');
deleteBtns.forEach(deleteBtn => {
  deleteBtn.addEventListener('click', () => {
    const recordId = deleteBtn.value;
    document.querySelector('input[name="id"]').value = recordId;
  });
});


