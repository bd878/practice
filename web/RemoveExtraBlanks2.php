<?php
    $spaces = trim(preg_replace('/\s{2,}/', ' ', $_GET['search'])); //trim - ������� ������� �� ������ � ����� ������ 
                                                                    //preg_replace - �������� � ������ 3 ��������� ������ 2 ��������� �� 1 ��������
    echo $spaces;