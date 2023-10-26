using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.InputSystem;

[RequireComponent(typeof(SpriteRenderer))]
[RequireComponent(typeof(Animator))]
public class CardBehavior : MonoBehaviour
{
   public Sprite faceUpSprite;

   private Sprite faceDownSprite;

   private Animator animator;

   private bool _mouseIsOver;
   private bool _isClicked;

   public int id;

   public InputActionAsset actions;

   [HideInInspector]
   public CardManager manager;

   public bool mouseIsOver{
      get {return _mouseIsOver;}
      set {
         _mouseIsOver = value;
         animator.SetBool("mouse is over", value);
         if(value) transform.parent.Translate(-transform.forward); 
         else transform.parent.Translate(transform.forward);
      }
   }

   public bool isClicked{
      get {return _isClicked;}
      set {
         _isClicked = value;
         animator.SetBool("is clicked", value);
      }
   }

   private void Start(){
      faceDownSprite = GetComponentInChildren<SpriteRenderer>().sprite;
      animator = GetComponentInChildren<Animator>();

   }

   
    void OnEnable(){
        actions.FindActionMap("card actions map").Enable();
        actions.FindActionMap("card actions map").FindAction("returns card").performed += OnMouseClicked;
    }

    void OnDisable(){
        actions.FindActionMap("card actions map").Disable();
        actions.FindActionMap("card actions map").FindAction("returns card").performed -= OnMouseClicked;
        
    }

   public void Switch(){
      GetComponentInChildren<SpriteRenderer>().sprite = faceUpSprite;
   }

   public void UnSwitch(){
      GetComponentInChildren<SpriteRenderer>().sprite = faceDownSprite;
   }

   private void OnMouseEnter(){
      mouseIsOver = true;
   }

   private void OnMouseExit(){
      mouseIsOver = false;
   }

   private void OnMouseClicked(InputAction.CallbackContext context){
      if(mouseIsOver) {
         isClicked = true;
         manager.FaceUp(this);  
         

      } 
   }
   
}