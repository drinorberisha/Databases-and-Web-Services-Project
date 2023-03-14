// I used site https://ipinfo.io/
// to find out the IP adress and geolocation
// of my computer - the client, accessing my server

let mapOptions ={
    center:[53.1094,8.7814],
    zoom: 10
}

let map = new L.map('map', mapOptions);

let layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');

map.addLayer(layer);

let marker = new L.Marker([53.1094,8.7814]);
marker.addTo(map);
marker.bindPopup("<b>IP: 212.201.44.249</b>").openPopup();