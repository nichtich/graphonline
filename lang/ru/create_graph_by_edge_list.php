<?php

    $g_lang['head_no_tags'] = 'Создание графа по списку рёбер';
    $g_lang['text'] = '<p>На данной странице вы можете задать список рёбер и построить по нему граф.</p>';
    $g_lang['pair_description'] = 'Задайте список рёбер, каждое ребро должно быть на новой строке и используйте в качестве разделителя между вершинами "<b>-</b>". Например: <b>1-2</b>. <small>Читайте ниже о расширеном формате.</small>';    
    $g_lang['plot_graph_button'] = 'Построить граф';
    $g_lang['pair_bad_format'] = 'Не правильный формат. Ребро должно иметь формат: вершина1-вершина2. <small>Читайте о расширеном формате ниже.</small>';
    $g_lang['ex_pair_format'] = "Расширеный формат";
    $g_lang['ex_pair_forma_description'] ="                            С помощью расширеного формата можно задавать орентированные и нагруженные дуги. Разные варианты использования:
        <ul>
            <li><b>a-b</b> - дуга между <b>a</b> и <b>b</b>.</li>                                
            <li><b>a>b</b> - ориентированная дуга из <b>a</b> в <b>b</b>.</li>
            <li><b>a&lt;b</b> - ориентированная дуга из <b>a</b> в <b>b</b>. </li>
            <li><b>a-(8)-b</b> - нагруженная дуга между <b>a</b> и <b>b</b> с весом <b>8</b>.</li>
            <li><b>a-(3.5)>b</b> - ориентированная дуга из <b>a</b> в <b>b</b> с весом <b>3.5</b>.</li>
            <li><b>a<(1)-b</b> - ориентированная дуга из <b>b</b> в <b>a</b> c весом <b>1</b>.</li>
        </ul>";
    $g_lang['edge_list'] = 'Список рёбер';
?>