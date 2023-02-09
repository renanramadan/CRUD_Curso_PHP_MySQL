</div>

<footer>
    <div class="container">
        2023 © - PataCursos - Todos os direitos reservados
    </div>

    <script src="js/jquery.js"></script>
    <script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    
    <script>
        $(document).ready( function () {
            $('#cursos').DataTable({
                language: {
                    "url": "//cdn.datatables.net/plug-ins/1.13.2/i18n/pt-BR.json"
                }
            } );
                
            $('#alunos').DataTable({
                language: {
                    "url": "//cdn.datatables.net/plug-ins/1.13.2/i18n/pt-BR.json"
                }
            } );
            $('#matriculas').DataTable({
                language: {
                    "url": "//cdn.datatables.net/plug-ins/1.13.2/i18n/pt-BR.json"
                }
            } );
        } );
    </script>

</footer>
</body>
</html>