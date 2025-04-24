document.querySelectorAll(".bg-white").forEach((projet) => {
  const chrono = projet.querySelector("#chrono");
  const startBtn = projet.querySelector("#start");
  const resetBtn = projet.querySelector("#reset");
  const stopBtn = projet.querySelector("#stop");

  let heures = 0;
  let minutes = 0;
  let secondes = 0;
  let estArreter = true;
  let timeout;

  const demarrer = () => {
    if (estArreter) {
      estArreter = false;
      defilerTemps();
    }
  };

  const arreter = () => {
    if (!estArreter) {
      estArreter = true;
      clearTimeout(timeout);
    }
  };

  const defilerTemps = () => {
    if (estArreter) return;

    secondes++;
    if (secondes === 60) {
      minutes++;
      secondes = 0;
    }
    if (minutes === 60) {
      heures++;
      minutes = 0;
    }

    chrono.textContent = `${heures.toString().padStart(2, "0")} : ${minutes.toString().padStart(2, "0")} : ${secondes.toString().padStart(2, "0")}`;
    timeout = setTimeout(defilerTemps, 1000);
  };

  const reset = () => {
    chrono.textContent = "00 : 00 : 00";
    estArreter = true;
    heures = 0;
    minutes = 0;
    secondes = 0;
    clearTimeout(timeout);
  };

  startBtn.addEventListener("click", demarrer);
  stopBtn.addEventListener("click", arreter);
  resetBtn.addEventListener("click", reset);
});