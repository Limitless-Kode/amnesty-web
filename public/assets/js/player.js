window.addEventListener('DOMContentLoaded',()=>{
    const vid = document.querySelector('video');
    const play_pause = document.querySelector('.play_pause');
    const slider = document.querySelector('#slider');
    let slider_fill = document.querySelector('.slider-fill');
    let slider_thumb = document.querySelector('.slider-thumb');
  
    vid.addEventListener('ended',()=> stop(vid));
    vid.addEventListener('contextmenu',(e)=> e.preventDefault());

  
    function stop(){
      const icon = play_pause.children[0];
      icon.setAttribute('name','play');
    }
  
    function play(player){
      const icon = play_pause.children[0];
      if(player.paused){
        player.play();
        icon.setAttribute('name','pause');
        seekSlider();
      }else{
        player.pause();
        icon.setAttribute('name','play');
      }
    }
  
    function seekSlider(){
      let duration = vid.duration;
      let seeking = false;
  
      vid.addEventListener('timeupdate',()=>{
        let currentTime = vid.currentTime;
        let percentage = (currentTime / duration) * 100;
        if(!seeking) {
          slider_thumb.style.left = `${percentage}%`;
          slider_fill.style.width = `${percentage}%`;
          slider.value = percentage
        };
      })
  
      slider.addEventListener('input',()=>{
        slider_thumb.style.left = `${(vid.currentTime / duration) * 100}%`;
        slider_fill.style.width = `${(vid.currentTime / duration) * 100}%`;
        vid.currentTime = (slider.value / 100) * duration;
      })
  
      slider.addEventListener('mousedown',(e)=>{
          console.log("clicked");
        if(e.button == 0){
          seeking = true;
        }
      })
  
      slider.addEventListener('mouseup',(e)=>{
        if(e.button == 0){
          seeking = false;
        }
      })
  
    }
  
    play_pause.addEventListener('click',()=> play(vid));
    vid.addEventListener('keypress', (e)=>{
      if(e.keyCode == 32){
        e.preventDefault();
        play(vid);
      }
    });
    let volume = document.querySelector('.speaker');
  
    volume.addEventListener('click',()=>{
      const icon = volume.children[0];
  
      if(vid.volume == 0){
        vid.volume = 1;
        icon.setAttribute('name','volume-high-outline');
        
      }else{
        vid.volume = 0;
        icon.setAttribute('name','volume-mute-outline');
      }
    })
  })
  