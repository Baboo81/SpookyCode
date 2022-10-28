using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using TMPro;

public class FinalPoints : MonoBehaviour
{
    //use PlayerPrefs in final version


    private int finalPoints = 16;
    public TextMeshProUGUI pointsText;
    void Start()
    {
        pointsText.text = finalPoints.ToString();
        Script.GetFinalPoints(finalPoints);
    }

    // Update is called once per frame
    public int GetScore()
    {
        return finalPoints;
    }

    //MyGameInstance.SendMessage('pointsText', 'GetScore');
}
