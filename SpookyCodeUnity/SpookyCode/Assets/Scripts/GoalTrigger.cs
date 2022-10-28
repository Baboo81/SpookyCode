using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;

public class GoalTrigger : MonoBehaviour
{
    public Character character;
    void OnTriggerEnter(Collider other)
    {
        if(other.CompareTag("Player"))
        {
            character.points += 10;
            SceneManager.LoadScene("Win");
            //Cursor.lockState = CursorLockMode.None;

        }
    } 
    
}

