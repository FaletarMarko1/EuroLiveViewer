# EuroLiveViewer

<hr>

Moguce je odabrati i pogledati tecaj za svaki dan od kada je eur uveden u Hrvatskoj. Takodjer je moguce pretvoriti EUR u bilo koju drugu valutu koja je ponudjena.
EuroLiveViewer is a web app that lets you check the exchange rate of euro since the day it was introduced in Croatia.
<p>
 You can also convert euro to any other presented currency.
</p>
<br>
<p>
 The data is collected in a xml file from hnb.hr. <br>
 https://api.hnb.hr/tecajn-eur/v3
</p>
<br>

1. Collecting data
` $url = "https://api.hnb.hr/tecajn-eur/v3?format=xml&datum-primjene=" . $datum;
  $xml = simplexml_load_file($url) or die("Ne postoje podaci za taj datum");
`
2. Displaying data to user
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


 
