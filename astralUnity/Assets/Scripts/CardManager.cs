// using System.Collections;
// using System.Collections.Generic;
// using UnityEngine;

// public class CardManager : MonoBehaviour
// {

//     public List<GameObject> deck = new();

//     //not necessary yet
//     private List<int> indexesAlreadyInGame = new();
//     private List<int> indexesNotAllowedAnymore = new();


//     void Start()
//     {
//         InstanciateCards();
//     }

//     //revoir cette partie la pour l'affichage
//     void InstanciateCards()
//     {
//         Vector3 offset = new(-3, -3, 0);

//         for (int line = 0; line < 3; line++)
//         {
//             for (int column = 0; column < 4; column++)
//             {
//                 Vector3 position = offset + Vector3.right * column * 2f + Vector3.up * line * 3;
//                 InstanciateCard(position);
//             }
//         }
//     }

//     void InstanciateCard(Vector3 position)
//     {

//         int index;
//         do
//         {
//             index = Random.Range(0, deck.Count);
//         }
//         while (indexesNotAllowedAnymore.Contains(index) ||
//         indexesAlreadyInGame.Count >= 6 && !indexesAlreadyInGame.Contains(index));

//         if (indexesAlreadyInGame.Contains(index))
//         {
//             indexesNotAllowedAnymore.Add(index);
//         }
//         else
//         {
//             indexesAlreadyInGame.Add(index);
//         }

//         GameObject card = Instantiate(deck[index], position, Quaternion.identity) as GameObject;
//         card.GetComponent<CardBehavior>().manager = this;

//     }

//     public void FaceUp(CardBehavior card)
//     {
//         StartCoroutine(_FaceUp(card));
//     }

//     private IEnumerator _FaceUp(CardBehavior card)
//     {
//         Debug.Log($"card face up: {card.name}");
//         yield return new WaitForSeconds(0.5f);

    
//     }
// }



