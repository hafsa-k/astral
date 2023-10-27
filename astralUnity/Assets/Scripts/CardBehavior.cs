using System.Collections;
using System.Collections.Generic;
using Unity.VisualScripting;
using UnityEngine;
using UnityEngine.InputSystem;

[RequireComponent(typeof(SpriteRenderer))]
[RequireComponent(typeof(Animator))]
public class CardBehavior : MonoBehaviour
{
   public Sprite faceUpSprite;
   public float speed;
   private Vector3 arrivalPoint;
   public static bool hasBeenChosen = false;
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
      arrivalPoint = new Vector3(-10f, 0f, 0f);

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
      Debug.Log("slide");
   }

   private IEnumerator SlideToArrivalPoint()
    {
      Debug.Log("is slide");
        speed = 10f; // La durée du mouvement
        Vector3 initialPosition = transform.parent.position;
        
        Vector3 direction = (arrivalPoint - initialPosition).normalized;
        float duration = Vector3.Distance(initialPosition, arrivalPoint) / speed;

        float elapsedTime = 0;

        while (elapsedTime < duration)
        {
            float step = speed * Time.deltaTime;
            transform.parent.position = Vector3.MoveTowards(transform.parent.position, arrivalPoint, step);
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
      if(mouseIsOver && !hasBeenChosen) {
         isClicked = true;
         manager.FaceUp(this);  
         
         IDWebSender.SendCard(id);
         
         CardBehavior.hasBeenChosen = true;

      
         // Trigger the animation using the animator and the trigger parameter.
        animator.SetTrigger("Slide");

      } 
   }
   
}