import java.util.*;
import java.lang.*;
import java.io.*;

public class Main
{
    public static void main (String[] args) throws Exception
    {
        String[] student = {"a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k"};
        int group = 3;

        Level4 level4 = new Level4();
        level4.execute(student, group);
    }
}
