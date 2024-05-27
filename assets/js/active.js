// siderbar icons start

// let activeIcon = null;
// let originalImageSrc = null;

// function handleIconClick(icon, newImagePath) {
//   const currentIcon = document.querySelector(`.icon.${icon}`);

//   if (activeIcon) {
//     const previousIcon = document.querySelector(`.icon.${activeIcon}`);
//     if (previousIcon) {
//       previousIcon.classList.remove("active");
//       if (originalImageSrc) {
//         previousIcon.src = originalImageSrc;
//       }
//     }
//   }

//   activeIcon = icon;

//   if (currentIcon) {
//     currentIcon.classList.add("active");
//     if (newImagePath) {
//       originalImageSrc = currentIcon.src; // Store the original image source
//       currentIcon.src = newImagePath;
//     }
//   }
// }

// siderbar icons end
  

            // graph 3  
              <?php
                 $total_assessment_time_seconds = array();
                   $total_assessment_time_months = array();
                // Include database connection
                include('../php/db_con.php');
                if (!$con) {
                    echo "heell";
                }
                // Query to fetch data GROUP BY MONTH(Date)
               $sql = "SELECT * FROM arc_flash WHERE Assessment_Time > 0 AND Emp_ID = '$id'";
                $result = mysqli_query($con, $sql);
            
                // Loop through results
                while($data = mysqli_fetch_array($result)) {
                   
                    $login_attempt_session[] = $data['login_attempt_session'];
                    
                }
                
                    for ($i = 0; $i < count($login_attempt_session); $i++) {
                
                    if($i != 0){
                        $login_attempt_session[$i] += $login_attempt_session[$i -1];
                    }
                    
                }
                
                $sql = "SELECT DISTINCT MONTHNAME(Date) AS Month FROM arc_flash";
                $result = mysqli_query($con, $sql);
                
                // Check for errors
                if (!$result) {
                    die('Error in SQL query: ' . mysqli_error($con));
                }
                
                // Loop through results
                $total_assessment_time_months = array();
                while ($data = mysqli_fetch_assoc($result)) {
                    $total_assessment_time_months[] = $data['Month'];
                }
                
                  ?>
                const valueArraySession = <?php echo json_encode($login_attempt_session); ?>;
                const valueArraysSession = <?php echo json_encode($total_assessment_time_months); ?>;
                 
            
            const TotalSession = {
              labels: valueArraysSession,
              datasets: [
                {
                  label: "",
                  data: valueArraySession, 
                  fill: false,
                  borderColor: "#006699", 
                  tension: 0.1,
                },
              ],
            };
            
            const newConfigTotalSession = {
              type: "line",
              data: TotalSession,
              options: {
                scales: {
                  x: {
                    ticks: {
                      color: "#004B63",
                      font: {
                        size: 12,
                        weight: 400,
                      },
                    },
                  },
                  y: {
                    ticks: {
                      color: "#3C5D68",
                      font: {
                        size: 12,
                        weight: 600,
                      },
                    },
                  },
                },
                elements: {
                  line: {
                    borderWidth: 2,
                  },
                  point: {
                    radius: 2,
                  },
                },
                plugins: {
                  legend: {
                    display: false,
                  },
                  tooltip: {
                   enabled: true, 
                mode: 'index', 
                intersect: false, 
                callbacks: {
                    label: function(context) {
                        return context.dataset.data[context.dataIndex]; 
                    }
                }
                  },
                },
              },
            };
            
            // Initialize the new chart for months when the document is ready
            document.addEventListener("DOMContentLoaded", () => {
              const ctxNewTotalSession = document
                .getElementById("TotalSessionChart")
                .getContext("2d");
              new Chart(ctxNewTotalSession, newConfigTotalSession);
            });


function changeTab(tabNumber) {
  // Hide all content divs
  document.querySelectorAll(".flex-main-data .content").forEach((content) => {
    content.classList.remove("active");
  });

  // Show the selected content
  document.getElementById("tabContent" + tabNumber).classList.add("active");
}
// tab chnage function end

 
// chart month tab1
 
// const UtilsMonths = {
//   months: ({ count }) => {
//     return ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul",];
//   },
// };
 
// const labelsMonths = UtilsMonths.months({ count: 9 }); // Corrected the variable name
// const dataMonths = {
//   labels: labelsMonth, // Corrected the variable name
//   datasets: [
//     {
//       label: "",
//       data: [300, 120, 100, 65, 59, 35, 54, 54, 32, 23, 23, 24],
//       fill: false,
//       borderColor: "#003344",
//       tension: 0.1,
//     },
//   ],
// };
 
// const configMonths = {
//   type: "line",
//   data: dataMonth, // Corrected the variable name
//   options: {
//     scales: {
//       x: {
//         ticks: {
//           color: "#3C5D68",
//           font: {
//             size: 12,
//             weight: 400,
//           },
//         },
//       },
//       y: {
//         ticks: {
//           color: "#3C5D68",
//           font: {
//             size: 12,
//             weight: 600,
//           },
//         },
//       },
//     },
//     elements: {
//       line: {
//         borderWidth: 2,
//       },
//       point: {
//         radius: 2,
//       },
//     },
//     plugins: {
//       legend: {
//         display: false,
//       },
//       tooltip: {
//         enabled: false,
//       },
//     },
//     maintainAspectRatio : false,
//   },
// };
 
// // Get the canvas element and initialize the chart
// document.addEventListener("DOMContentLoaded", () => {
//   const ctx = document.getElementById("myChartMonth").getContext("2d");
//   new Chart(ctx, configMonth); // Corrected the variable name
// });
 
const UtilsYear = {
  years: ({ count }) => {
    // Replace this with your actual yearly data
    const currentYear = new Date().getFullYear();
    return Array.from({ length: count }, (_, index) => currentYear - index);
  },
};
 
const labelsYear = UtilsYear.years({ count: 5 }); // Adjust the count as needed
const dataYear = {
  labels: labelsYear,
  datasets: [
    {
      label: "",
      data: [600, 400, 300, 200, 100], // Replace with your actual yearly data
      fill: false,
      borderColor: "#003344", // Adjust the color as needed
      tension: 0.1,
    },
  ],
};
 
const configYear = {
  type: "line",
  data: dataYear,
  options: {
    scales: {
      x: {
        ticks: {
          color: "#3C5D68",
          font: {
            size: 12,
            weight: 400,
          },
        },
      },
      y: {
        ticks: {
          color: "#3C5D68",
          font: {
            size: 12,
            weight: 600,
          },
        },
      },
    },
    elements: {
      line: {
        borderWidth: 2,
      },
      point: {
        radius: 2,
      },
    },
    plugins: {
      legend: {
        display: false,
      },
      tooltip: {
        enabled: false,
      },
    },
  },
};
 
// Get the canvas element and initialize the chart
document.addEventListener("DOMContentLoaded", () => {
  const ctx = document.getElementById("myChartYear").getContext("2d"); // Change the ID as needed
  new Chart(ctx, configYear);
});

// new second start

function changeTabNew(tabNumber) {
  // Hide all content-new divs in the new chart box
  document
    .querySelectorAll(".graph-box-new .content-new")
    .forEach((content) => {
      content.classList.remove("active");
    });

  // Show the selected content-new
  document.getElementById("tabContentNew" + tabNumber).classList.add("active");
}

// You will follow similar initialization for myChartNew, myChartNewMonth, and myChartNewYear as previously discussed.



// new second end

// thrid
function changeTabNewAvts(tabNumber) {
  // Hide all content-new divs in the new chart box
  document
    .querySelectorAll(".graph-box-new-avts .content-new")
    .forEach((content) => {
      content.classList.remove("active");
    });

  // Show the selected content-new
  document
    .getElementById("tabContentNewAvts" + tabNumber)
    .classList.add("active"); // Removed the dot before the class name
}

const newDataAvts = {
  labels: ["Sun", "Mon", "Tue", "Web", "Thu", "Fri", "Sat"],
  datasets: [
    {
      label: "",
      data: [10, 20, 30],
      fill: false,
      borderColor: "#004B63",
      tension: 0.1,
    },
  ],
};

const newConfigAvts = {
  type: "line",
  data: newDataAvts,
  options: {
    scales: {
      x: {
        ticks: {
          color: "#3C5D68",
          font: {
            size: 12,
            weight: 400,
          },
        },
      },
      y: {
        ticks: {
          color: "#3C5D68",
          font: {
            size: 12,
            weight: 600,
          },
        },
      },
    },
    elements: {
      line: {
        borderWidth: 2,
      },
      point: {
        radius: 2,
      },
    },
    plugins: {
      legend: {
        display: false,
      },
      tooltip: {
        enabled: false,
      },
    },
  },
};

// Initialize the new chart when the document is ready
document.addEventListener("DOMContentLoaded", () => {
  const ctxNewAvts = document.getElementById("myChartNewAvts").getContext("2d");
  new Chart(ctxNewAvts, newConfigAvts);
});



const newYearDataAvts = {
  labels: ["2020", "2021", "2022", "2023", "2024"], // Replace with your years
  datasets: [
    {
      label: "",
      data: [100, 120, 80, 150, 200], // Replace with your data
      fill: false,
      borderColor: "#006699", // Adjust the color as needed
      tension: 0.1,
    },
  ],
};

const newYearConfigAvts = {
  type: "line",
  data: newYearDataAvts,
  options: {
    scales: {
      x: {
        ticks: {
          color: "#3C5D68",
          font: {
            size: 12,
            weight: 400,
          },
        },
      },
      y: {
        ticks: {
          color: "#3C5D68",
          font: {
            size: 12,
            weight: 600,
          },
        },
      },
    },
    elements: {
      line: {
        borderWidth: 2,
      },
      point: {
        radius: 2,
      },
    },
    plugins: {
      legend: {
        display: false,
      },
      tooltip: {
        enabled: false,
      },
    },
  },
};

// Initialize the new chart for years when the document is ready
document.addEventListener("DOMContentLoaded", () => {
  const ctxNewYearAvts = document
    .getElementById("myChartNewYearAvts")
    .getContext("2d");
  new Chart(ctxNewYearAvts, newYearConfigAvts);
});

//   fourth
function changeTabNewUild(tabNumber) {
  // Hide all content-new divs in the new chart box
  document
    .querySelectorAll(".graph-box-new-uild .content-new")
    .forEach((content) => {
      content.classList.remove("active");
    });

  // Show the selected content-new
  document
    .getElementById("tabContentNewUild" + tabNumber)
    .classList.add("active"); // Removed the dot before the class name
}

const newDaysDataUild = {
  labels: ["Sun", "Mon", "Tue", "Web", "Thu", "Fri", "Sat"],
  datasets: [
    {
      label: "",
      data: [10, 20, 30],
      fill: false,
      borderColor: "#004B63",
      tension: 0.1,
    },
  ],
};

const newDaysConfigUild = {
  type: "line",
  data: newDaysDataUild,
  options: {
    scales: {
      x: {
        ticks: {
          color: "#3C5D68",
          font: {
            size: 12,
            weight: 400,
          },
        },
      },
      y: {
        ticks: {
          color: "#3C5D68",
          font: {
            size: 12,
            weight: 600,
          },
        },
      },
    },
    elements: {
      line: {
        borderWidth: 2,
      },
      point: {
        radius: 2,
      },
    },
    plugins: {
      legend: {
        display: false,
      },
      tooltip: {
        enabled: false,
      },
    },
  },
};

// Initialize the new chart for Days when the document is ready
document.addEventListener("DOMContentLoaded", () => {
  const ctxNewDaysUild = document
    .getElementById("myChartNeUild")
    .getContext("2d");
  new Chart(ctxNewDaysUild, newDaysConfigUild);
});

const newMonthsDataUild = {
  labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
  datasets: [
    {
      label: "",
      data: [50, 30, 40, 25, 60, 45, 30, 55, 40], // Replace with your data
      fill: false,
      borderColor: "#006699", // Adjust the color as needed
      tension: 0.1,
    },
  ],
};

const newMonthsConfigUild = {
  type: "line",
  data: newMonthsDataUild,
  options: {
    scales: {
      x: {
        ticks: {
          color: "#3C5D68",
          font: {
            size: 12,
            weight: 400,
          },
        },
      },
      y: {
        ticks: {
          color: "#3C5D68",
          font: {
            size: 12,
            weight: 600,
          },
        },
      },
    },
    elements: {
      line: {
        borderWidth: 2,
      },
      point: {
        radius: 2,
      },
    },
    plugins: {
      legend: {
        display: false,
      },
      tooltip: {
        enabled: false,
      },
    },
  },
};

// Initialize the new chart for Months when the document is ready
document.addEventListener("DOMContentLoaded", () => {
  const ctxNewMonthsUild = document
    .getElementById("myChartNewMonthUild")
    .getContext("2d");
  new Chart(ctxNewMonthsUild, newMonthsConfigUild);
});

const newYearDataUild = {
  labels: ["2020", "2021", "2022", "2023", "2024"],
  datasets: [
    {
      label: "",
      data: [60, 45, 30, 55, 40, 50, 30, 40, 25, 60, 45, 30], // Replace with your data
      fill: false,
      borderColor: "#006699", // Adjust the color as needed
      tension: 0.1,
    },
  ],
};

const newYearConfigUild = {
  type: "line",
  data: newYearDataUild,
  options: {
    scales: {
      x: {
        ticks: {
          color: "#3C5D68",
          font: {
            size: 12,
            weight: 400,
          },
        },
      },
      y: {
        ticks: {
          color: "#3C5D68",
          font: {
            size: 12,
            weight: 600,
          },
        },
      },
    },
    elements: {
      line: {
        borderWidth: 2,
      },
      point: {
        radius: 2,
      },
    },
    plugins: {
      legend: {
        display: false,
      },
      tooltip: {
        enabled: false,
      },
    },
  },
};

const ctxNewYearUild = document
  .getElementById("myChartNewYearUild")
  .getContext("2d");
new Chart(ctxNewYearUild, newYearConfigUild);

// fifth

function changeTabNewSml(tabNumber) {
  // Hide all content-new divs in the new chart box
  document
    .querySelectorAll(".graph-box-new-sml .content-new")
    .forEach((content) => {
      content.classList.remove("active");
    });

  // Show the selected content-new
  document
    .getElementById("tabContentNewSml" + tabNumber)
    .classList.add("active"); // Removed the dot before the class name
}

const newDaysDataSml = {
  labels: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
  datasets: [
    {
      label: "",
      data: [10, 20, 30],
      fill: false,
      borderColor: "#004B63",
      tension: 0.1,
    },
  ],
};

const newDaysConfigSml = {
  type: "line",
  data: newDaysDataSml,
  options: {
    scales: {
      x: {
        ticks: {
          color: "#3C5D68",
          font: {
            size: 12,
            weight: 400,
          },
        },
      },
      y: {
        ticks: {
          color: "#3C5D68",
          font: {
            size: 12,
            weight: 600,
          },
        },
      },
    },
    elements: {
      line: {
        borderWidth: 2,
      },
      point: {
        radius: 2,
      },
    },
    plugins: {
      legend: {
        display: false,
      },
      tooltip: {
        enabled: false,
      },
    },
  },
};

const myChartNeSml = new Chart(
  document.getElementById("myChartNeSml").getContext("2d"),
  newDaysConfigSml
);

const newMonthsDataSml = {
  labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
  datasets: [
    {
      label: "",
      data: [50, 30, 40, 25, 60, 45, 30, 55, 40, 50, 35, 45],
      fill: false,
      borderColor: "#006699",
      tension: 0.1,
    },
  ],
};

const newMonthsConfigSml = {
  type: "line",
  data: newMonthsDataSml,
  options: {
    scales: {
      x: {
        ticks: {
          color: "#3C5D68",
          font: {
            size: 12,
            weight: 400,
          },
        },
      },
      y: {
        ticks: {
          color: "#3C5D68",
          font: {
            size: 12,
            weight: 600,
          },
        },
      },
    },
    elements: {
      line: {
        borderWidth: 2,
      },
      point: {
        radius: 2,
      },
    },
    plugins: {
      legend: {
        display: false,
      },
      tooltip: {
        enabled: false,
      },
    },
  },
};

// Initialize the new chart for Months when the document is ready
document.addEventListener("DOMContentLoaded", () => {
  const ctxNewMonthsSml = document
    .getElementById("myChartNewMonthSml")
    .getContext("2d");
  new Chart(ctxNewMonthsSml, newMonthsConfigSml);
});

const yearsDataSml = {
  labels: ["2019", "2020", "2021", "2022", "2023"], // Adjust the labels as necessary
  datasets: [
    {
      label: "",
      data: [120, 150, 170, 180, 200], // Replace with your data
      fill: false,
      borderColor: "#33A2FF", // Adjust the color as needed
      tension: 0.1,
    },
  ],
};

const yearsConfigSml = {
  type: "line",
  data: yearsDataSml,
  options: {
    scales: {
      x: {
        ticks: {
          color: "#3C5D68",
          font: {
            size: 12,
            weight: 400,
          },
        },
      },
      y: {
        ticks: {
          color: "#3C5D68",
          font: {
            size: 12,
            weight: 600,
          },
        },
      },
    },
    elements: {
      line: {
        borderWidth: 2,
      },
      point: {
        radius: 2,
      },
    },
    plugins: {
      legend: {
        display: false,
      },
      tooltip: {
        enabled: false,
      },
    },
  },
};

// Initialize the chart for Years when the document is ready
document.addEventListener("DOMContentLoaded", () => {
  const ctxYears = document
    .getElementById("myChartNewYearSml")
    .getContext("2d");
  new Chart(ctxYears, yearsConfigSml);
});

// tab option of training employee
$(document).ready(function () {
  $(".training-employee-box .tab-option ul.tabs li").click(function () {
    var tab_id = $(this).attr("data-tab");

    $(".training-employee-box .tab-option ul.tabs li").removeClass("current");
    $(".training-employee-box .tab-option .tab-content").removeClass("current");

    $(this).addClass("current");
    $("#" + tab_id).addClass("current");
  });
});

// tab change for graph 1
function changeTabTe(tabNumber) {
  // Get all tab content elements within the graph-box
  var tabContents = document.querySelectorAll(
    ".main-box-tem .graph-box-tem .content"
  );

  // Hide all tab content elements
  tabContents.forEach(function (content) {
    content.classList.remove("active");
  });

  // Show the selected tab content
  var selectedTabContent = document.getElementById("tabContentTe" + tabNumber);
  selectedTabContent.classList.add("active");
}

// for days 
function myChartDaysTrainEmp() {
  const myChartDaysTrainEmpData = {
      labels: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
      datasets: [{
          label: "",
          data: [10, 20, 30],
          fill: false,
          borderColor: "#004B63",
          tension: 0.1,
      }],
  };

  const myChartDaysTrainEmpConfig = {
      type: "line",
      data: myChartDaysTrainEmpData,
      options: {
          scales: {
              x: {
                  ticks: {
                      color: "#3C5D68",
                      font: {
                          size: 12,
                          weight: 400,
                      },
                  },
              },
              y: {
                  ticks: {
                      color: "#3C5D68",
                      font: {
                          size: 12,
                          weight: 600,
                      },
                  },
              },
          },
          elements: {
              line: {
                  borderWidth: 2,
              },
              point: {
                  radius: 2,
              },
          },
          plugins: {
              legend: {
                  display: false,
              },
              tooltip: {
                  enabled: false,
              },
          },
      },
  };

  // Initialize the chart
  const myChartDaysTrainEmpInstance = new Chart(
      document.getElementById("myChartDaysTrainEmp").getContext("2d"),
      myChartDaysTrainEmpConfig
  );
}
myChartDaysTrainEmp();

// months 
function myChartMonthsTrainEmp() {
  const myChartMonthsTrainEmpData = {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
      datasets: [{
          label: "",
          data: [50, 60, 70, 80, 90, 100, 110],
          fill: false,
          borderColor: "#004B63",
          tension: 0.1,
      }],
  };

  const myChartMonthsTrainEmpConfig = {
      type: "line",
      data: myChartMonthsTrainEmpData,
      options: {
          scales: {
              x: {
                  ticks: {
                      color: "#3C5D68",
                      font: {
                          size: 12,
                          weight: 400,
                      },
                  },
              },
              y: {
                  ticks: {
                      color: "#3C5D68",
                      font: {
                          size: 12,
                          weight: 600,
                      },
                  },
              },
          },
          elements: {
              line: {
                  borderWidth: 2,
              },
              point: {
                  radius: 2,
              },
          },
          plugins: {
              legend: {
                  display: false,
              },
              tooltip: {
                  enabled: false,
              },
          },
      },
  };

  // Initialize the chart
  const myChartMonthsTrainEmpInstance = new Chart(
      document.getElementById("myChartMonthsTrainEmp").getContext("2d"),
      myChartMonthsTrainEmpConfig
  );
}
myChartMonthsTrainEmp();

// year 
function myChartYearTrainEmp() {
  const myChartYearTrainEmpData = {
      labels: ["2021", "2022", "2023", "2024"],
      datasets: [{
          label: "",
          data: [150, 200, 250],
          fill: false,
          borderColor: "#004B63",
          tension: 0.1,
      }],
  };

  const myChartYearTrainEmpConfig = {
      type: "line",
      data: myChartYearTrainEmpData,
      options: {
          scales: {
              x: {
                  ticks: {
                      color: "#3C5D68",
                      font: {
                          size: 12,
                          weight: 400,
                      },
                  },
              },
              y: {
                  ticks: {
                      color: "#3C5D68",
                      font: {
                          size: 12,
                          weight: 600,
                      },
                  },
              },
          },
          elements: {
              line: {
                  borderWidth: 2,
              },
              point: {
                  radius: 2,
              },
          },
          plugins: {
              legend: {
                  display: false,
              },
              tooltip: {
                  enabled: false,
              },
          },
      },
  };

  // Initialize the chart
  const myChartYearTrainEmpInstance = new Chart(
      document.getElementById("myChartYearTrainEmp").getContext("2d"),
      myChartYearTrainEmpConfig
  );
}
myChartYearTrainEmp();


// graph 2
function changeTabTest(tabNumber) {
  // Get all tab content elements within the graph-box-tem
  var tabContents = document.querySelectorAll('.main-box-tem .graph-box-tem-test .content');

  // Hide all tab content elements
  tabContents.forEach(function(content) {
      content.classList.remove('active');
  });

  // Show the selected tab content
  var selectedTabContent = document.getElementById('tabContentTest' + tabNumber);
  selectedTabContent.classList.add('active');
}

// days '
function myChartDaysTrainEmpTest() {
  const myChartDaysTrainEmpTestData = {
      labels: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
      datasets: [{
          label: "",
          data: [10, 20, 30],
          fill: false,
          borderColor: "#004B63",
          tension: 0.1,
      }],
  };

  const myChartDaysTrainEmpTestConfig = {
      type: "line",
      data: myChartDaysTrainEmpTestData,
      options: {
          scales: {
              x: {
                  ticks: {
                      color: "#3C5D68",
                      font: {
                          size: 12,
                          weight: 400,
                      },
                  },
              },
              y: {
                  ticks: {
                      color: "#3C5D68",
                      font: {
                          size: 12,
                          weight: 600,
                      },
                  },
              },
          },
          elements: {
              line: {
                  borderWidth: 2,
              },
              point: {
                  radius: 2,
              },
          },
          plugins: {
              legend: {
                  display: false,
              },
              tooltip: {
                  enabled: false,
              },
          },
      },
  };

  // Initialize the chart
  const myChartDaysTrainEmpTestInstance = new Chart(
      document.getElementById("myChartDaysTrainEmpTest").getContext("2d"),
      myChartDaysTrainEmpTestConfig
  );
}
myChartDaysTrainEmpTest();

// month 
function myChartMonthsTrainEmpTest() {
  const myChartMonthsTrainEmpTestData = {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
      datasets: [{
          label: "",
          data: [50, 60, 70, 80, 90, 100, 110],
          fill: false,
          borderColor: "#004B63",
          tension: 0.1,
      }],
  };

  const myChartMonthsTrainEmpTestConfig = {
      type: "line",
      data: myChartMonthsTrainEmpTestData,
      options: {
          scales: {
              x: {
                  ticks: {
                      color: "#3C5D68",
                      font: {
                          size: 12,
                          weight: 400,
                      },
                  },
              },
              y: {
                  ticks: {
                      color: "#3C5D68",
                      font: {
                          size: 12,
                          weight: 600,
                      },
                  },
              },
          },
          elements: {
              line: {
                  borderWidth: 2,
              },
              point: {
                  radius: 2,
              },
          },
          plugins: {
              legend: {
                  display: false,
              },
              tooltip: {
                  enabled: false,
              },
          },
      },
  };

  // Initialize the chart
  const myChartMonthsTrainEmpTestInstance = new Chart(
      document.getElementById("myChartMonthsTrainEmpTest").getContext("2d"),
      myChartMonthsTrainEmpTestConfig
  );
}
myChartMonthsTrainEmpTest();

// year 
function myChartYearTrainEmpTest() {
  const myChartYearTrainEmpTestData = {
      labels: ["2021", "2022", "2023", "2024"],
      datasets: [{
          label: "",
          data: [150, 200, 250],
          fill: false,
          borderColor: "#004B63",
          tension: 0.1,
      }],
  };

  const myChartYearTrainEmpTestConfig = {
      type: "line",
      data: myChartYearTrainEmpTestData,
      options: {
          scales: {
              x: {
                  ticks: {
                      color: "#3C5D68",
                      font: {
                          size: 12,
                          weight: 400,
                      },
                  },
              },
              y: {
                  ticks: {
                      color: "#3C5D68",
                      font: {
                          size: 12,
                          weight: 600,
                      },
                  },
              },
          },
          elements: {
              line: {
                  borderWidth: 2,
              },
              point: {
                  radius: 2,
              },
          },
          plugins: {
              legend: {
                  display: false,
              },
              tooltip: {
                  enabled: false,
              },
          },
      },
  };

  // Initialize the chart
  const myChartYearTrainEmpTestInstance = new Chart(
      document.getElementById("myChartYearTrainEmpTest").getContext("2d"),
      myChartYearTrainEmpTestConfig
  );
}
myChartYearTrainEmpTest();


// tab option of assessment employee
document.addEventListener("DOMContentLoaded", function() {
  const tabParents = document.querySelectorAll(".tab-parent");

  tabParents.forEach(tabParent => {
    const tabs = tabParent.querySelectorAll(".tab-btn");
    const tabContents = tabParent.querySelectorAll(".tab-content");

    tabs.forEach(tab => {
      tab.addEventListener("click", () => {
        // Remove 'active' class from all tabs
        tabs.forEach(t => t.classList.remove("active"));
        // Hide all tab contents
        tabContents.forEach(content => content.classList.remove("active"));

        // Add 'active' class to the clicked tab
        tab.classList.add("active");
        // Show the corresponding tab content
        const tabId = tab.getAttribute("data-tab");
        tabParent.querySelector(`#${tabId}`).classList.add("active");
      });
    });
  });
});

// graph 1 
function changeTabAssessment(tabIndex) {
  const tabs = document.querySelectorAll('.main-box-assessment .graph-box-assessment .tab');
  const contents = document.querySelectorAll('.main-box-assessment .graph-box-assessment .content');

  // Remove 'active' class from all tabs and contents
  tabs.forEach(tab => tab.classList.remove('active'));
  contents.forEach(content => content.classList.remove('active'));

  // Add 'active' class to the clicked tab and content
  tabs[tabIndex - 1].classList.add('active');
  contents[tabIndex - 1].classList.add('active');
}

// days 
function myChartDaysAssessmentEmp() {
  const myChartDaysAssessmentEmpData = {
      labels: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
      datasets: [{
          label: "",
          data: [10, 20, 30],
          fill: false,
          borderColor: "#004B63",
          tension: 0.1,
      }],
  };

  const myChartDaysAssessmentEmpConfig = {
      type: "line",
      data: myChartDaysAssessmentEmpData,
      options: {
          scales: {
              x: {
                  ticks: {
                      color: "#3C5D68",
                      font: {
                          size: 12,
                          weight: 400,
                      },
                  },
              },
              y: {
                  ticks: {
                      color: "#3C5D68",
                      font: {
                          size: 12,
                          weight: 600,
                      },
                  },
              },
          },
          elements: {
              line: {
                  borderWidth: 2,
              },
              point: {
                  radius: 2,
              },
          },
          plugins: {
              legend: {
                  display: false,
              },
              tooltip: {
                  enabled: false,
              },
          },
      },
  };

  // Initialize the chart
  const myChartDaysAssessmentEmpInstance = new Chart(
      document.getElementById("myChartDaysAssessmentEmp").getContext("2d"),
      myChartDaysAssessmentEmpConfig
  );
}
myChartDaysAssessmentEmp();

// month 
function myChartMonthsAssessmentEmp() {
  const myChartMonthsAssessmentEmpData = {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
      datasets: [{
          label: "",
          data: [50, 60, 70, 80, 90, 100, 110],
          fill: false,
          borderColor: "#004B63",
          tension: 0.1,
      }],
  };

  const myChartMonthsAssessmentEmpConfig = {
      type: "line",
      data: myChartMonthsAssessmentEmpData,
      options: {
          scales: {
              x: {
                  ticks: {
                      color: "#3C5D68",
                      font: {
                          size: 12,
                          weight: 400,
                      },
                  },
              },
              y: {
                  ticks: {
                      color: "#3C5D68",
                      font: {
                          size: 12,
                          weight: 600,
                      },
                  },
              },
          },
          elements: {
              line: {
                  borderWidth: 2,
              },
              point: {
                  radius: 2,
              },
          },
          plugins: {
              legend: {
                  display: false,
              },
              tooltip: {
                  enabled: false,
              },
          },
      },
  };

  // Initialize the chart
  const myChartMonthsAssessmentEmpInstance = new Chart(
      document.getElementById("myChartMonthsAssessmentEmp").getContext("2d"),
      myChartMonthsAssessmentEmpConfig
  );
}
myChartMonthsAssessmentEmp();

// year 
function myChartYearAssessmentEmp() {
  const myChartYearAssessmentEmpData = {
      labels: ["2019", "2020", "2021", "2022", "2023", "2024"],
      datasets: [{
          label: "",
          data: [200, 250, 300, 350, 400, 450],
          fill: false,
          borderColor: "#004B63",
          tension: 0.1,
      }],
  };

  const myChartYearAssessmentEmpConfig = {
      type: "line",
      data: myChartYearAssessmentEmpData,
      options: {
          scales: {
              x: {
                  ticks: {
                      color: "#3C5D68",
                      font: {
                          size: 12,
                          weight: 400,
                      },
                  },
              },
              y: {
                  ticks: {
                      color: "#3C5D68",
                      font: {
                          size: 12,
                          weight: 600,
                      },
                  },
              },
          },
          elements: {
              line: {
                  borderWidth: 2,
              },
              point: {
                  radius: 2,
              },
          },
          plugins: {
              legend: {
                  display: false,
              },
              tooltip: {
                  enabled: false,
              },
          },
      },
  };

  // Initialize the chart
  const myChartYearAssessmentEmpInstance = new Chart(
      document.getElementById("myChartYearAssessmentEmp").getContext("2d"),
      myChartYearAssessmentEmpConfig
  );
}
myChartYearAssessmentEmp();

// graph 2 
function changeTabSt(tabIndex) {
  const tabs = document.querySelectorAll('.graph-box-assessment-st .tabs .tab');
  const contents = document.querySelectorAll('.graph-box-assessment-st .content');

  // Remove 'active' class from all tabs and contents
  tabs.forEach(tab => tab.classList.remove('active'));
  contents.forEach(content => content.classList.remove('active'));

  // Add 'active' class to the clicked tab and content
  tabs[tabIndex - 1].classList.add('active');
  contents[tabIndex - 1].classList.add('active');
}

// days 
function myChartDaysStEmp() {
  const myChartDaysStEmpData = {
      labels: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
      datasets: [{
          label: "",
          data: [10, 20, 30],
          fill: false,
          borderColor: "#004B63",
          tension: 0.1,
      }],
  };

  const myChartDaysStEmpConfig = {
      type: "line",
      data: myChartDaysStEmpData,
      options: {
          scales: {
              x: {
                  ticks: {
                      color: "#3C5D68",
                      font: {
                          size: 12,
                          weight: 400,
                      },
                  },
              },
              y: {
                  ticks: {
                      color: "#3C5D68",
                      font: {
                          size: 12,
                          weight: 600,
                      },
                  },
              },
          },
          elements: {
              line: {
                  borderWidth: 2,
              },
              point: {
                  radius: 2,
              },
          },
          plugins: {
              legend: {
                  display: false,
              },
              tooltip: {
                  enabled: false,
              },
          },
      },
  };

  // Initialize the chart
  const myChartDaysStEmpInstance = new Chart(
      document.getElementById("myChartDaysStEmp").getContext("2d"),
      myChartDaysStEmpConfig
  );
}
myChartDaysStEmp();

// month 
function myChartMonthsStEmp() {
  const myChartMonthsStEmpData = {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
      datasets: [{
          label: "",
          data: [50, 60, 70, 80, 90, 100, 110],
          fill: false,
          borderColor: "#004B63",
          tension: 0.1,
      }],
  };

  const myChartMonthsStEmpConfig = {
      type: "line",
      data: myChartMonthsStEmpData,
      options: {
          scales: {
              x: {
                  ticks: {
                      color: "#3C5D68",
                      font: {
                          size: 12,
                          weight: 400,
                      },
                  },
              },
              y: {
                  ticks: {
                      color: "#3C5D68",
                      font: {
                          size: 12,
                          weight: 600,
                      },
                  },
              },
          },
          elements: {
              line: {
                  borderWidth: 2,
              },
              point: {
                  radius: 2,
              },
          },
          plugins: {
              legend: {
                  display: false,
              },
              tooltip: {
                  enabled: false,
              },
          },
      },
  };

  // Initialize the chart
  const myChartMonthsStEmpInstance = new Chart(
      document.getElementById("myChartMonthsStEmp").getContext("2d"),
      myChartMonthsStEmpConfig
  );
}
myChartMonthsStEmp();


// year 
function myChartYearStEmp() {
  const myChartYearStEmpData = {
      labels: ["2021", "2022","2023", "2024", "2025"], 
      datasets: [{
          label: "",
          data: [120, 130, 140, 110, 50],
          fill: false,
          borderColor: "#004B63",
          tension: 0.1,
      }],
  };

  const myChartYearStEmpConfig = {
      type: "line",
      data: myChartYearStEmpData,
      options: {
          scales: {
              x: {
                  ticks: {
                      color: "#3C5D68",
                      font: {
                          size: 12,
                          weight: 400,
                      },
                  },
              },
              y: {
                  ticks: {
                      color: "#3C5D68",
                      font: {
                          size: 12,
                          weight: 600,
                      },
                  },
              },
          },
          elements: {
              line: {
                  borderWidth: 2,
              },
              point: {
                  radius: 2,
              },
          },
          plugins: {
              legend: {
                  display: false,
              },
              tooltip: {
                  enabled: false,
              },
          },
      },
  };

  // Initialize the chart
  const myChartYearStEmpInstance = new Chart(
      document.getElementById("myChartYearStEmp").getContext("2d"),
      myChartYearStEmpConfig
  );
}

myChartYearStEmp();



// employee page js code 
function changeTabEmpGraph1(tabIndex) {
  const tabs = document.querySelectorAll('.box-rates-graphs .tabs .tab');
  const contents = document.querySelectorAll('.box-rates-graphs .content');

  // Remove 'active' class from all tabs and contents
  tabs.forEach(tab => tab.classList.remove('active'));
  contents.forEach(content => content.classList.remove('active'));

  // Add 'active' class to the clicked tab and content
  tabs[tabIndex - 1].classList.add('active');
  contents[tabIndex - 1].classList.add('active');
}



function changeTabEmpGraph2(tabIndex) {
  const tabs = document.querySelectorAll('.box-rates-graphs2 .tabs .tab');
  const contents = document.querySelectorAll('.box-rates-graphs2 .content');

  // Remove 'active' class from all tabs and contents
  tabs.forEach(tab => tab.classList.remove('active'));
  contents.forEach(content => content.classList.remove('active'));

  // Add 'active' class to the clicked tab and content
  tabs[tabIndex - 1].classList.add('active');
  contents[tabIndex - 1].classList.add('active');
}


function changeTabEmpGraph3(tabIndex) {
  const tabs = document.querySelectorAll('.box-rates-graphs3 .tabs .tab');
  const contents = document.querySelectorAll('.box-rates-graphs3 .content');

  // Remove 'active' class from all tabs and contents
  tabs.forEach(tab => tab.classList.remove('active'));
  contents.forEach(content => content.classList.remove('active'));

  // Add 'active' class to the clicked tab and content
  tabs[tabIndex - 1].classList.add('active');
  contents[tabIndex - 1].classList.add('active');
}



// training graph 1 
function changeTabEmpTrainGraph1(tabIndex) {
  const tabs = document.querySelectorAll('.box-rates-training .tabs .tab');
  const contents = document.querySelectorAll('.box-rates-training .content');

  // Remove 'active' class from all tabs and contents
  tabs.forEach(tab => tab.classList.remove('active'));
  contents.forEach(content => content.classList.remove('active'));

  // Add 'active' class to the clicked tab and content
  tabs[tabIndex - 1].classList.add('active');
  contents[tabIndex - 1].classList.add('active');
}


function changeTabEmpTrainGraph2(tabIndex) {
  const tabs = document.querySelectorAll('.box-rates-assessment .tabs .tab');
  const contents = document.querySelectorAll('.box-rates-assessment .content');

  // Remove 'active' class from all tabs and contents
  tabs.forEach(tab => tab.classList.remove('active'));
  contents.forEach(content => content.classList.remove('active'));

  // Add 'active' class to the clicked tab and content
  tabs[tabIndex - 1].classList.add('active');
  contents[tabIndex - 1].classList.add('active');
}

document.getElementById('popupButton').addEventListener('click', function() {
  document.getElementById('popup').style.display = 'block';
});
 
document.getElementById('closeButton').addEventListener('click', function() {
  document.getElementById('popup').style.display = 'none';
});
 
 
 
 
 
//  graph employee 2nd 
const newDataMonth = {
  labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"], // Adjust these labels as necessary
  datasets: [
    {
      label: "",
      data: [120, 150, 180, 130, 160, 190, 170, 140, 200, 165, 175, 155], // Update these data points as necessary
      fill: false,
      borderColor: "#004B63", // Adjust the color as necessary
      tension: 0.1,
    },
  ],
};

const newConfigMonth = {
  type: "line",
  data: newDataMonth,
  options: {
    scales: {
      x: {
        ticks: {
          color: "#3C5D68",
          font: {
            size: 12,
            weight: 400,
          },
        },
      },
      y: {
        ticks: {
          color: "#3C5D68",
          font: {
            size: 12,
            weight: 600,
          },
        },
      },
    },
    elements: {
      line: {
        borderWidth: 2,
      },
      point: {
        radius: 2,
      },
    },
    plugins: {
      legend: {
        display: false,
      },
      tooltip: {
        enabled: false,
      },
    },
  },
};

// Initialize the monthly chart for the new chart box when the document is ready
document.addEventListener("DOMContentLoaded", () => {
  const ctxNewMonth = document
    .getElementById("myChartNewMonth")
    .getContext("2d");
  new Chart(ctxNewMonth, newConfigMonth);
});


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 



 
 
 
 
 
 
 
 
 
 
