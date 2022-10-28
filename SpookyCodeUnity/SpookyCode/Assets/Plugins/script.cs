using System.Runtime.InteropServices;

public static class Script{
    [DllImport("__Internal")]
    public static extern void GetFinalPoints(int score);
}