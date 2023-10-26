using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.InputSystem;

[RequireComponent(typeof(SpriteRenderer))]
[RequireComponent(typeof(Animator))]
public class CardBehavior : MonoBehaviour
{
   public Sprite faceUpSprite;
   public float speed = 5;
   private Vector3 arrivalPoint;

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
      faceDownSprite = GetComponent<SpriteRenderer>().sprite;
      animator = GetComponent<Animator>();
      arrivalPoint = new Vector3(-12f, 5f, 0f);

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
      GetComponent<SpriteRenderer>().sprite = faceUpSprite;
   }
   public void Slide(){
      StartCoroutine(SlideToArrivalPoint());
   
   }

   private IEnumerator SlideToArrivalPoint()
    {
      Debug.Log("is slide");
        float duration = 5f; // La durée du mouvement
        Vector3 initialPosition = transform.position;
        float elapsedTime = 0;

        while (Vector3.Distance(transform.position, arrivalPoint) > 0.01f)
        {
            transform.position = Vector3.Lerp(initialPosition, arrivalPoint, elapsedTime / duration);
            elapsedTime += Time.deltaTime;
            yield return null;
        }

        // Assurez-vous que la position d'arrivée soit exacte pour éviter de petits décalages.
        transform.position = arrivalPoint;
    }

   // public void UnSwitch(){
   //    GetComponent<SpriteRenderer>().sprite = faceDownSprite;
   // }

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