/* ---- particles.js config ---- */

particlesJS("bg", {
    "particles": {
      "number": {
        "value": 30,
        "density": {
          "enable": false,
          "value_area":800
        }
      },
      "color": {
        "value": "#e6b800"
      },
      "shape": {
        "type": "circle",
        "stroke": {
          "width":3,
          "color": "#e6b800"
        },
        "polygon": {
          "nb_sides": 5
        },
        "image": {
          "src": "img/github.svg",
          "width": 100,
          "height": 100
        }
      },
      "opacity": {
        "value": 0.5,
        "random":true,
        "anim": {
          "enable": true,
          "speed":4,
          "opacity_min": 0.1,
          "sync": false
        }
      },
      "size": {
        "value":1,
        "random": true,
        "anim": {
          "enable": true,
          "speed": 0.1,
          "size_min": 0.5,
          "sync": false
        }
      },
      "line_linked": {
        "enable":true,
        "distance":50,
        "color": "#e6b800",
        "opacity": 1,
        "width":1
      },
      "move": {
        "enable": true,
        "speed":1,
        "direction": "none",
        "random": true,
        "straight": false,
        "out_mode": "out",
        "bounce": false,
        "attract": {
          "enable": true,
          "rotateX": 600,
          "rotateY": 1200
        }
      }
    },
    "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": {
          "enable": false,
          "mode": "grab"
        },
        "onclick": {
          "enable": false,
          "mode": "push"
        },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 140,
          "line_linked": {
            "opacity": 1
          }
        },
        "bubble": {
          "distance": 400,
          "size": 40,
          "duration": 2,
          "opacity": 8,
          "speed": 3
        },
        "repulse": {
          "distance": 200,
          "duration": 0.4
        },
        "push": {
          "particles_nb": 4
        },
        "remove": {
          "particles_nb": 2
        }
      }
    },
    "retina_detect": true
  });
  
  
  /* ---- stats.js config ---- */
  
  var count_particles, stats, update;
  stats = new Stats;
  stats.setMode(0);
  stats.domElement.style.position = 'absolute';
  stats.domElement.style.left = '0px';
  stats.domElement.style.top = '0px';
  document.body.appendChild(stats.domElement);
  count_particles = document.querySelector('.js-count-particles');
  update = function() {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);