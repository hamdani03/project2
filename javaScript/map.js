const map = L.map('map').setView([55.8739875, 50.564166999999998], 7);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

L.marker([41.9, 12.5]).addTo(map)
    .bindPopup('Italie')
    .openPopup();