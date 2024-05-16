# EuroLiveViewer

EuroLiveViewer is a web app that lets you check the exchange rate of the euro since the day it was introduced in Croatia.
<p>
 You can also convert the euro to any other presented currency.
</p>
<br>
<p>
 The data is collected in an XML file from hnb.hr. <br>
 https://api.hnb.hr/tecajn-eur/v3
</p>
<br>

1. Collecting data:<br>
` $url = "https://api.hnb.hr/tecajn-eur/v3?format=xml&datum-primjene=" . $datum;
`<br>
`$xml = simplexml_load_file($url) or die("Ne postoje podaci za taj datum");
`
<br>

2. Displaying data to user:<br>
`foreach ($xml->item as $item):
    echo '<tr>';
    echo '<td>' . $item->valuta . '</td>';
    echo '<td>' . $item->drzava . '</td>';
    echo '<td>' . $item->datum_primjene . '</td>';
    echo '<td>' . $item->kupovni_tecaj . '</td>';
    echo '<td>' . $item->srednji_tecaj . '</td>';
    echo '<td>' . $item->prodajni_tecaj . '</td>';
    echo '</tr>';
  endforeach;
}
`


 
