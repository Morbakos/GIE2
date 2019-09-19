<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script>
    var sticky = document.querySelector('.sticky');

    if (sticky.style.position !== 'sticky') {
        var stickyTop = sticky.offsetTop;

        document.addEventListener('scroll', function () {
        window.scrollY >= stickyTop ?
            sticky.classList.add('fixed') :
            sticky.classList.remove('fixed');
        });
    }
</script>