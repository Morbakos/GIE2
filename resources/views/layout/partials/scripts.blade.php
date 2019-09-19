<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script>
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })

    var sticky = document.querySelector('.sticky');

    if (sticky.style.position !== 'sticky') {
        var stickyTop = sticky.offsetTop;

        document.addEventListener('scroll', function () {
        window.scrollY >= stickyTop ?
            sticky.classList.add('top') :
            sticky.classList.remove('top');
        });
    }
</script>