@if(session()->get('configuration')[8]['description'])
    <aside class="min-h-100 overflow-h b-radius-10 flex-1 m-left-30-px w-1024-100 m-top-1024-30 h-1024-350-px h-600-250-px">
    <?php
    $map = str_replace('<iframe src=', '<iframe src=', session()->get('configuration')[8]['description']);
    ?>
    {!! $map !!}
    <!--
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.760236132119!2d-51.19081598427849!3d-30.043735738205317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95197823229c28a5%3A0x6cf8e8f4472c08c!2sRua%20V%C3%ADtor%20Hugo%2C%2037%20-%20Petr%C3%B3polis%2C%20Porto%20Alegre%20-%20RS%2C%2090630-070!5e0!3m2!1spt-BR!2sbr!4v1571401437670!5m2!1spt-BR!2sbr" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    -->
    </aside>
@endif