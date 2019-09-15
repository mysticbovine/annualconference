/*
 * GET SCENE
 */
	const scene = document.getElementById('scene');

/*
 * CREATE NEW PARALLAX INSTANCE
 */
	const parallaxInstance = new Parallax(scene);

/*
 * CREATE ALL PARTICULES INSTANCE
 */
	particlesJS('star-first', {
		"particles": {
			"number": {
				"value": 175,
				"density": {
					"enable": true,
					"value_area": 1400
				}
			},
			"color": {
				"value": "#ffffff"
			},
			"shape": {
				"type": "circle"
			},
			"opacity": {
				"value": 0.6,
				"random": true,
				"anim": {
					"enable": true,
					"speed": 0.2,
					"opacity_min": 0.4,
					"sync": false
				}
			},
			"size": {
				"value": 1,
				"random": true,
				"anim": {
					"enable": true,
					"speed": 0.5,
					"size_min": 0.8,
					"sync": false
				}
			},
			"line_linked": {
				"enable": false
			},
			"move": {
				"enable": true,
				"speed": 0.50,
				"direction": "top",
				"random": true,
				"straight": false,
				"out_mode": "out",
				"bounce": false,
				"attract": {
					"enable": false,
					"rotateX": 600,
					"rotateY": 600
				}
			}
		},
		"interactivity": {
			"detect_on": "canvas",
			"events": {
				"onhover": {
					"enable": false
				},
				"onclick": {
					"enable": true,
					"mode": "push"
				},
				"resize": true
			},
			"modes": {
				"push": {
					"particles_nb": 1
				}
			}
		},
		"retina_detect": true
	})

	particlesJS('star-second', {
	  "particles": {
		 "number": {
			"value": 60,
			"density": {
			  "enable": true,
			  "value_area": 1000
			}
		 },
		 "color": {
			"value": "#ffe0e0"
		 },
		 "shape": {
			"type": "circle"
		 },
		 "opacity": {
			"value": 0.6,
			"random": true,
			"anim": {
			  "enable": true,
			  "speed": 0.2,
			  "opacity_min": 0.4,
			  "sync": false
			}
		 },
		 "size": {
			"value": 1.4,
			"random": true,
			"anim": {
			  "enable": true,
			  "speed": 0.2,
			  "size_min": 1,
			  "sync": false
			}
		 },
		 "line_linked": {
			"enable": false
		 },
		 "move": {
			"enable": true,
			"speed": 0.65,
			"direction": "top",
			"random": true,
			"straight": false,
			"out_mode": "out",
			"bounce": false,
			"attract": {
			  "enable": false,
			  "rotateX": 600,
			  "rotateY": 600
			}
		 }
	  },
	  "interactivity": {
		 "detect_on": "canvas",
		 "events": {
			"onhover": {
			  "enable": false
			},
			"onclick": {
			  "enable": false
			},
			"resize": true
		 }
	  },
	  "retina_detect": true
	})

	particlesJS('star-third', {
	  "particles": {
		 "number": {
			"value": 50,
			"density": {
			  "enable": true,
			  "value_area": 1000
			}
		 },
		 "color": {
			"value": "#ffffff"
		 },
		 "shape": {
			"type": "circle"
		 },
		 "opacity": {
			"value": 0.3,
			"random": true,
			"anim": {
			  "enable": true,
			  "speed": 0.2,
			  "opacity_min": 0.4,
			  "sync": false
			}
		 },
		 "size": {
			"value": 2.3,
			"random": true,
			"anim": {
			  "enable": true,
			  "speed": 0.5,
			  "size_min": 1.8,
			  "sync": false
			}
		 },
		 "line_linked": {
			"enable": false
		 },
		 "move": {
			"enable": true,
			"speed": 1.4,
			"direction": "top",
			"random": true,
			"straight": false,
			"out_mode": "out",
			"bounce": false,
			"attract": {
			  "enable": false,
			  "rotateX": 600,
			  "rotateY": 600
			}
		 }
	  },
	  "interactivity": {
		 "detect_on": "canvas",
		 "events": {
			"onhover": {
			  "enable": false
			},
			"onclick": {
			  "enable": false
			},
			"resize": true
		 }
	  },
	  "retina_detect": true
	})

	particlesJS('star-fourth', {
	  "particles": {
		 "number": {
			"value": 15,
			"density": {
			  "enable": true,
			  "value_area": 1200
			}
		 },
		 "color": {
			"value": "#ffffff"
		 },
		 "shape": {
			"type": "circle"
		 },
		 "opacity": {
			"value": 0.3,
			"random": true,
			"anim": {
			  "enable": true,
			  "speed": 0.2,
			  "opacity_min": 0.2,
			  "sync": false
			}
		 },
		 "size": {
			"value": 7,
			"random": true,
			"anim": {
			  "enable": true,
			  "speed": 0.25,
			  "size_min": 4,
			  "sync": false
			}
		 },
		 "line_linked": {
			"enable": false
		 },
		 "move": {
			"enable": true,
			"speed": 1.7,
			"direction": "top",
			"random": true,
			"straight": false,
			"out_mode": "out",
			"bounce": false,
			"attract": {
			  "enable": false,
			  "rotateX": 600,
			  "rotateY": 600
			}
		 }
	  },
	  "interactivity": {
		 "detect_on": "canvas",
		 "events": {
			"onhover": {
			  "enable": false
			},
			"onclick": {
			  "enable": false
			},
			"resize": true
		 }
	  },
	  "retina_detect": true
	})

/*
 * INITIALISE TYPED
 */
	$('li.layer .text .sub-title').typed({
		strings: [
			"Register now! ^1500 ",
			"Early Bird rates now available ^1500"
		],
		loop: true,
		contentType: 'html',
		showCursor: false
	});