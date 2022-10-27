using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;

public class ContinueToSecondScene : MonoBehaviour
{
    public Character character;
    // Start is called before the first frame update
    void Start()
    {
        
    }

    // Update is called once per frame
    void Update()
    {
        if(character.points == 6)
        {
            SceneManager.LoadScene(2);
        }

    }
}
