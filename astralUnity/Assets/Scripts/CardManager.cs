using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.Video;

public class CardManager : MonoBehaviour
{

    public List<GameObject> deck = new();

    //not necessary yet
    private List<int> indexesAlreadyInGame = new();
    private List<int> indexesNotAllowedAnymore = new();
    public int nCards = 22;
   
    void Start()
    {
        InstanciateCards();
    }

    //revoir cette partie la pour l'affichage
    void InstanciateCards()
    
    {
        float cardSpacing = 1.1f; // Espacement entre les cartes (ajustez selon vos besoins)
        Vector3 parentPosition = transform.position - cardSpacing * (nCards-1)* 0.5f * Vector3.right;

        for (int line = 0; line < nCards; line++)
        {
            Vector3 position = parentPosition + Vector3.right * (line * cardSpacing);
            InstanciateCard(position);
        }
    }

    void InstanciateCard(Vector3 position)
    {

        int index;
        do
        {
            index = Random.Range(0, deck.Count);
        }
        while (indexesNotAllowedAnymore.Contains(index));

        
        indexesNotAllowedAnymore.Add(index);


        GameObject card = Instantiate(deck[index], position, Quaternion.identity) as GameObject;
        card.GetComponentInChildren<CardBehavior>().manager = this;

    }

    public void FaceUp(CardBehavior card)
    {
        StartCoroutine(_FaceUp(card));
    }

    private IEnumerator _FaceUp(CardBehavior card)
    {
        Debug.Log($"card face up: {card.name}");
        yield return new WaitForSeconds(0.5f);
    
    }
}




