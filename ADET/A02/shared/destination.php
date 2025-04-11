<main class="main-content">
<div class="container py-5">
  <div class="row g-4 justify-content-center" id="cardContainer"></div>
  <div class="mt-5" id="destinationDetails" style="display: none;"></div>
</div>
</div>
<script>
 
  const destinations = [
    {
      name: "Mystic Cottage",
      icon: "iconMysticCottage.png",
      img: "mysticCottage.jpg",
      desc: "Nestled in a whispering forest, this charming cottage is infused with ancient druidic magic.",
      location: "Enchanted Forest",
      climate: "Misty & Calm",
      activities: ["Herb Gathering", "Forest Walks", "Potion Crafting"],
      price: "🪙 3,000 Gold",
      bg: "#e0f7e9"
    },
    {
      name: "Castle",
      icon: "iconCastle.png",
      img: "Castle.webp",
      desc: "A royal Castle",
      location: "Ne Mera Empire",
      climate: "Windy & Cool",
      activities: ["Ballroom", "Education", "Royal Games"],
      price: "🪙 15,000 Gold",
      bg: "#e6f2ff"
    },
    {
      name: "Lunar Grove",
      icon: "iconLunarGrove.png",
      img: "lunarGrove.jpg",
      desc: "A serene grove bathed in moonlight, perfect for dreamers and mystics seeking inner peace.",
      location: "Moonshadow Valley",
      climate: "Cool & Serene",
      activities: ["Moon Bathing", "Crystal Mining", "Dream Reading"],
      price: "🪙 40,200 Gold",
      bg: "#f3e8ff"
    },
    {
      name: "Taverns",
      icon: "iconTavern.png",
      img: "Taverns.jpg",
      desc: "A lively old tavern at the heart of a bustling street.",
      location: "The busy streets of Byes-aytea",
      climate: "Hot & Busy",
      activities: ["Guild Quest", "Monster Hunting", "Join Guild"],
      price: "🪙 500 Gold",
      bg: "#ffe3e3"
    }
  ];

  const container = document.getElementById("cardContainer");
  const details = document.getElementById("destinationDetails");

  destinations.forEach((place, i) => {
    container.innerHTML += `
      <div class="col-6 col-sm-4 col-md-3">
        <div class="card h-100 shadow border-0 text-white" style="cursor: pointer;" onclick="showDestination(${i})">
          <div class="card-img-top position-relative" style="height: 200px; background: url('img/${place.img}') center/cover no-repeat;">
            <div class="position-absolute w-100 h-100" style="background-color: rgba(0, 0, 0, 0.4);"></div>
            <img src="img/${place.icon}" alt="${place.name} Icon" class="position-absolute top-50 start-50 translate-middle" style="width: 60px; height: 60px;">
          </div>
          <div class="card-body text-center bg-dark-subtle text-dark">
            <h5 class="card-title mb-0">${place.name}</h5>
          </div>
        </div>
      </div>
    `;
  });

  function showDestination(index) {
    const place = destinations[index];
    details.style.display = "block";

    const activities = place.activities.map(item => `<li>✨ ${item}</li>`).join("");

    details.innerHTML = `
      <div class="container py-4 rounded-0 shadow-lg" style="background-color: ${place.bg}; min-height: 60vh;">
        <div class="row gy-4 align-items-center">
          <div class="col-md-3 text-center">
            <img src="img/${place.icon}" alt="${place.name}" class="img-fluid mb-3" style="width: 150px; height: 150px; object-fit: contain;">
            <h3 class="fw-bold">${place.name}</h3>
          </div>
          <div class="col-md-6">
            <p class="text-muted fs-5">${place.desc}</p>
            <p><strong>📍 Location:</strong> ${place.location}</p>
            <p><strong>🌦️ Climate:</strong> ${place.climate}</p>
            <p><strong>💰 Price:</strong> <span class="text-success">${place.price}</span></p>
            <div>
              <strong>🎯 Activities:</strong>
              <ul class="list-unstyled mt-2">${activities}</ul>
            </div>
          </div>
          <div class="col-md-3 text-center">
            <form method="POST" class="d-grid gap-2">
              <input type="hidden" name="selected_destination" value="${place.name}">
              <button type="submit" class="btn btn-primary btn-lg px-3">
                Book Now
              </button>
            </form>
          </div>
        </div>
      </div>
    `;

    window.scrollTo({ top: details.offsetTop - 70, behavior: 'smooth' });
  }
</script>
