const $ = jQuery; 
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);


class Animations {
    constructor(){
       this.events();
       
    }

    events(){
        
                //front page
                if(document.querySelector('.usp-container')){
                    this.ourUSPSection();

                }
                if(document.querySelector('.hero-section')){
                    this.heroSection(); 
                }
                if(document.querySelector('.services-section')){
                    this.ourServicesSection(); 
                }

                if(document.querySelector('.our-reviews-section')){
                    this.reviewSection();

                }


                this.ourTeamSection();

                //project single page
                if(document.querySelector('.single-project-hero-container')){
                    this.heroProjectSection();
                }
                
                if(document.querySelector(".loading-screen")){
                this.projectArchive(); 
                }
        
       
    }

    //project archive
    projectArchive(){
        
            gsap.from('.project-card-section .content', {
                scrollTrigger: {
                    trigger: '.project-card-section',
                    start: "top 50%", 
                    end: "100px 50%",
 
                    toggleActions: "play none none none"
                    
                }, 
                scale: 0, 
                y: 60,
                yoyo: true, 
                ease: "power1.inOut",
                delay:0,
                stagger: {
                amount: 0.5
                }
                    })
        
        
    }
    //project single page
    heroProjectSection(){
        gsap.from('.single-project-hero-container .row-title', {
            opacity:0,
            ease: "power1.inOut",
            delay:0,
            
                })
        gsap.from('.single-project-hero-container .gallery-image', {
            scale: 0.1, 
            y: 60,
            yoyo: true, 
            ease: "power1.inOut",
            delay:1,
            stagger: {
            amount: 1.5
            }
                })
        gsap.from('.single-project-hero-container .gallery-container', {
            scale: 0.1, 
            y: 60,
            yoyo: true, 
            ease: "power1.inOut",
            delay:1,
            stagger: {
            amount: 1.5
            }
                })
            let servicePage = $('.single-services .hero-section').attr('data-page'); 
            console.log(servicePage);
            if(servicePage == 'service-page'){
                gsap.from('.single-project-content-container', {
                    y:200,
                    opacity:0,
                    ease: "power1.inOut",
                    delay:1,
                    
                        })
            }
            else{
                gsap.from('.single-project-content-container', {
                    y:200,
                    opacity:0,
                    ease: "power1.inOut",
                    delay:3,
                    
                        })
            }
        
                
    
    }
    //front page
    heroSection(){ 
        gsap.defaults({
            ease: "power2.in", 
            duration: 1.5, 
            opacity: 0 
          });
        
        gsap.from('.hero-section .content h1', {
            scrollTrigger: {
                trigger: '.hero-section',
                start: "top center",  
                toggleActions: "play none none none"
            },
            x: -500
        });
        gsap.from('.hero-section .content .button', {
            scrollTrigger: {
                trigger: '.hero-section',
                start: "top center",  
                toggleActions: "play none none none"
            },
            duration:2
        })
        
    }

    ourUSPSection(){
        
        gsap.from('.usp-container .card', {
            scrollTrigger: {
                trigger: '.usp-container',
                start: "200px 80%",  
                toggleActions: "play none none none"
   
            }, 
            x: -200, 
            duration: 1, 
            opacity: 0
        })
        gsap.from('.usp-section .construction-worker', {
            scrollTrigger: {
                trigger: '.usp-container',
                start: "200px 80%",  
                toggleActions: "play none none none"
   
            }, 
            
            duration: 3, 
            opacity: 0
        })
        
    }

    ourServicesSection(){
        
        gsap.from('.services-section .card', {
            scrollTrigger: {
                trigger: '.services-section',
                start: "top 80%", 
                end: "500px 90%", 
                toggleActions: "play none none none", 
                scrub: 0.5
                
            }, 
            scale: 0.1, 
            y: 60,
            yoyo: true, 
            ease: "power1.inOut",
            delay:0,
            stagger: {
            amount: 1.5
            }
                })
        
    }
    
    ourTeamSection(){
        gsap.from('.our-team-section', {
            scrollTrigger: {
                trigger: '.our-team-section',
                start: "top 90%", 
                end: "100px 40%", 
                toggleActions: "play none none none"
            }, 
            y: 200, 
            opacity:0, 
            duration:1
            });
    }
    reviewSection(){
        //image
        gsap.from('.our-reviews-section .card img', {
            scrollTrigger: {
                trigger: '.our-reviews-section',
                start: "top 60%", 
                end: "100px 40%", 
                toggleActions: "play none none none"
            }, 
            scale:0.2,
            duration:1
            });

            //content
            gsap.from('.our-reviews-section .card .content', {
                scrollTrigger: {
                    trigger: '.our-reviews-container',
                    start: "top 60%", 
                    end: "100px 40%",
 
                    toggleActions: "play none none none"
                }, 
                opacity:0,
                duration:2
                });
            
    }
}

export default Animations; 