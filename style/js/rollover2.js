/**
 * �N���X�t�F�[�h���郍�[���I�[�o�[����
 * rollover2.js
 * Copyright (c) 2007 KAZUMiX
 * http://d.hatena.ne.jp/KAZUMiX/20071017/rollover2
 * 
 * Licensed under the MIT License:
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * �X�V����
 * 2009/06/02 �u���E�U�́u�߂��v�Ńt�F�[�h���Ԃ��c���Ă����ꍇ�ɑΏ�
 * 2007/10/17 ���J
 */

(function(){
   // �y�[�W�J�ڎ��ɓ����ɂ����p
   var rolloverImages = [];
   
   function setRollOver2(){
     if(!document.images){return;}
     var imgs = document.images;
     var insert = [];
     for(var i=0,len=imgs.length; i<len; i++){
       var splitname = imgs[i].src.split('_rollout.');
       if(splitname[1]){
         var rolloverImg = document.createElement('img');
         rolloverImages.push(rolloverImg);
         rolloverImg.src = splitname[0]+'_rollover.'+splitname[1];
         var alpha = 0;
         rolloverImg.currentAlpha = alpha;
         rolloverImg.style.opacity = alpha/100;
         rolloverImg.style.filter = 'alpha(opacity='+alpha+')';
         rolloverImg.style.position = 'absolute';

         //���[���I�[�o�[�E�A�E�g�������ꂼ�����ݒ�
         addEvent(rolloverImg,'mouseover',function(){setFader(this,100);});
         addEvent(rolloverImg,'mouseout',function(){setFader(this,0);});

         // ���Œǉ����邽�߂ɒǉ��ꏊ�Ƌ��ɕۑ����Ă���
         // ���̎��_�Œǉ�������document.images�������������ĕs�s��
         insert[insert.length] = {position:imgs[i],element:rolloverImg};
       }
     }
     // ���ō��������[���I�[�o�[�摜���ǉ�
     for(i=0,len=insert.length; i<len ;i++){
       var parent = insert[i].position.parentNode;
       parent.insertBefore(insert[i].element,insert[i].position);
     }

     // �y�[�W�J�ڎ��ɂ̓t�F�[�h���Ԃ��N���A����
     addEvent(window,'beforeunload', clearRollover);
   }

   // �w���v�f���w�蓧���x�ɂ��邽�߂̃t�F�[�h�A�j�����ݒ肷���֐�

   function setFader(targetObj,targetAlpha){
     targetObj.targetAlpha = targetAlpha;
     if(targetObj.currentAlpha==undefined){
       targetObj.currentAlpha = 100;
     }
     if(targetObj.currentAlpha==targetObj.targetAlpha){
       return;
     }
     if(!targetObj.fading){
       if(!targetObj.fader){
         targetObj.fader = fader;
       }
       targetObj.fading = true;
       targetObj.fader();
     }
   }

   // �A���t�@�l���^�[�Q�b�g�l�ɋ߂Â����֐�
   // �^�[�Q�b�g�l�ɂȂ������I��

   function fader(){
     this.currentAlpha += (this.targetAlpha - this.currentAlpha)*0.2;
     if(Math.abs(this.currentAlpha-this.targetAlpha)<1){
       this.currentAlpha = this.targetAlpha;
       this.fading = false;
     }
     var alpha = parseInt(this.currentAlpha);
     this.style.opacity = alpha/100;
     this.style.filter = 'alpha(opacity='+alpha+')';
     if(this.fading){
       var scope = this;
       setTimeout(function(){fader.apply(scope)},30);
     }
   }
   
   // ���ׂẴ��[���I�[�o�[�摜���𓧖��ɂ����֐��i�J�ڎ��p�j

   function clearRollover(){
     for(var i=0,len=rolloverImages.length; i<len; i++){
       var image = rolloverImages[i];
       image.style.opacity = 0;
       image.style.filter = 'alpha(opacity=0)';
     }
   }

   // �C�x���g���ǉ������֐�

   function addEvent(eventTarget, eventName, func){
     if(eventTarget.addEventListener){
       // ���_���u���E�U
       eventTarget.addEventListener(eventName, func, false);
     }else if(window.attachEvent){
       // IE
       eventTarget.attachEvent('on'+eventName, function(){func.apply(eventTarget);});
     }
   }

   addEvent(window,'load',setRollOver2);

 })();
