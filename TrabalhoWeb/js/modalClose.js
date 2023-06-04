document.getElementById('myModal').addEventListener('hide.bs.modal', function () {
    var modal = this;
    modal.classList.add('modal-closing');
    setTimeout(function () {
      modal.classList.remove('modal-closing');
    }, 500);
  });
  