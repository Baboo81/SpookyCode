using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Collect : MonoBehaviour
{
    public AudioSource m_MyAudioSource;
    
    void OnTriggerEnter(Collider other)
    {
        if ( other.gameObject.CompareTag("Player"))
        {
            PickUp(other.GetComponent<Character>());
            m_MyAudioSource.Play();
        }
    }
    void PickUp(Character character) {
        character.points += 1;
        Destroy(gameObject);
    }


}
