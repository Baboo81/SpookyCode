using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.InputSystem;
using TMPro;

public class Character : MonoBehaviour
{
    public TextMeshProUGUI scoreText;
    
    private int _points;
    public int points
    {
        get { return _points; }
        set {
            _points = value;
            scoreText.text = $"POINTS X {_points}";
        }
    }

}