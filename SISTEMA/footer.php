<footer>
   
</footer>
        </div>
    </div>
    
    <script src="Javascript/buscadores.js"></script>
    <script src="assets/static/js/components/dark.js"></script>
    <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/extensions/choices.js/public/assets/scripts/choices.js"></script>
    <script src="assets/static/js/pages/form-element-select.js"></script>
    <script src="assets/compiled/js/app.js"></script>
    <script src="assets/static/js/pages/horizontal-layout.js"></script>  
    <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="assets/static/js/pages/dashboard.js"></script>
    <script src="Javascript/cambioTamano.js"></script>

    <script>
    var checkboxes = document.querySelectorAll('.check');

    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            var ischeck = this.checked;
            var checkboxNumber = checkbox.id.replace('check', '');
            var campoInput = document.getElementById('campoInput' + checkboxNumber);

            if (ischeck) {
                campoInput.style.display = 'block';
            } else {
                campoInput.style.display = 'none';
            }

        });
    });
</script>
</body>

</html>