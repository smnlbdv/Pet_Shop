function onEntry(entry) {
    entry.forEach(change => {
      if (change.isIntersecting) {
       change.target.classList.add('element-show');
      }
    });
  }
  
  let options = {
    threshold: [0.5] };
  let observer = new IntersectionObserver(onEntry, options);
  let elements = document.querySelectorAll('.grid-caregory');
  let elements1 = document.querySelectorAll('.akzii');
  let elements2 = document.querySelectorAll('.brend');
  let elements3 = document.querySelectorAll('.podpiska');
  let elements4 = document.querySelectorAll('.footer');
  let elements5 = document.querySelectorAll('.header1');
  let elements6 = document.querySelectorAll('.bg-section');
  
  for (let elm of elements) {
    observer.observe(elm);
  }
  for (let elm of elements1) {
    observer.observe(elm);
  }
  for (let elm of elements2) {
    observer.observe(elm);
  }
  for (let elm of elements3) {
    observer.observe(elm);
  }
  for (let elm of elements4) {
    observer.observe(elm);
  }
  for (let elm of elements5) {
    observer.observe(elm);
  }

  for (let elm of elements6) {
    observer.observe(elm);
  }
  