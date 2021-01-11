<?php
function tampilan($halaman, $data = [])
{
    echo view('template/v_header', $data);
    echo view('template/v_sidebar');
    echo view('template/v_topbar');
    echo view($halaman, $data);
    echo view('template/v_footer');
}
