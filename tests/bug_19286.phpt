--TEST--
Request #19286: Loop error on empty clusters
--FILE--
<?php

/**
 * Request 19286: "Loop error on empty clusters."
 *
 * @category Image
 * @package  Image_GraphViz
 * @author   Frédéric G. Marand <fgm@osinet.fr>
 * @link     http://pear.php.net/bugs/bug.php?id=19286
 */
require_once 'Image/GraphViz.php';

$graph = new Image_GraphViz();
$graph->addCluster('c1_id', 'c1_title');
$graph->addSubgraph('s1_id', 's1_title');
echo $graph->parse();
?>
--EXPECT--
strict digraph G {
    subgraph cluster_c1_id {
        graph [ label=c1_title ];
    }
    subgraph s1_id {
        graph [ label=s1_title ];
    }
}
