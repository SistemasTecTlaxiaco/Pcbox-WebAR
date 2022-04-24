<!DOCTYPE html>
<html>  
  <head>
   <!-- <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script> 
    <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/mind-ar@1.1.4/dist/mindar-image.prod.js"></script>
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/mind-ar@1.1.4/dist/mindar-image-aframe.prod.js"></script>
  </head>   

  <body width="25px" height="25px">
    <a-scene
      mindar-image="ImageTargetSrc:https://web-ar-pcbox.herokuapp.com/images/targets.mind"
      vr-mode-ui="enabled: false"
      device-orientation-permission-ui="enabled: false">
      <a-camera position="0 0 0" look-controls="enabled: false"></a-camera>
      <a-entity mindar-image-target="targetIndex: 0" scale=".2 .2 .2">
        <a-gltf-model scale="0.25 0.25 0.25" src="https://web-ar-pcbox.herokuapp.com/models/Alaptop.glb">
        </a-gltf-model>
      </a-entity>
    </a-scene>
  </body>
</html>
